<?php

namespace Backend\Modules\Logos\Actions;

use Backend\Core\Engine\Base\ActionAdd;
use Backend\Core\Engine\Form;
use Backend\Core\Engine\Language;
use Backend\Core\Engine\Meta;
use Backend\Core\Engine\Model;
use Backend\Modules\Logos\Engine\Model as BackendLogosModel;
use Backend\Modules\Search\Engine\Model as BackendSearchModel;
use Backend\Modules\Tags\Engine\Model as BackendTagsModel;
use Backend\Modules\Users\Engine\Model as BackendUsersModel;

/**
 * This is the add-action, it will display a form to create a new item
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class Add extends ActionAdd
{
    /**
     * Execute the actions
     */
    public function execute()
    {
        parent::execute();

        $this->loadForm();
        $this->validateForm();

        $this->parse();
        $this->display();
    }

    /**
     * Load the form
     */
    protected function loadForm()
    {
        $this->frm = new Form('add');

        $this->frm->addText('naam', null, null, 'inputText title', 'inputTextError title');
        $this->frm->addImage('logo');
        $this->frm->addText('url');

        // get categories
        $categories = BackendLogosModel::getCategories();
        $this->frm->addDropdown('category_id', $categories);

        // meta
        $this->meta = new Meta($this->frm, null, 'naam', true);

    }

    /**
     * Parse the page
     */
    protected function parse()
    {
        parent::parse();

        // get url
        $url = Model::getURLForBlock($this->URL->getModule(), 'Detail');
        $url404 = Model::getURL(404);

        // parse additional variables
        if ($url404 != $url) {
            $this->tpl->assign('detailURL', SITE_URL . $url);
        }
        $this->record['url'] = $this->meta->getURL();

    }

    /**
     * Validate the form
     */
    protected function validateForm()
    {
        if ($this->frm->isSubmitted()) {
            $this->frm->cleanupFields();

            // validation
            $fields = $this->frm->getFields();

            $fields['naam']->isFilled(Language::err('FieldIsRequired'));
            $fields['category_id']->isFilled(Language::err('FieldIsRequired'));

            // validate meta
            $this->meta->validate();

            if ($this->frm->isCorrect()) {
                // build the item
                $item = array();
                $item['language'] = Language::getWorkingLanguage();
                $item['naam'] = $fields['naam']->getValue();

                // the image path
                $imagePath = FRONTEND_FILES_PATH . '/' . $this->getModule() . '/logo';

                // create folders if needed
                if (!\SpoonDirectory::exists($imagePath . '/100x100')) {
                    \SpoonDirectory::create($imagePath . '/100x100');
                }
                if (!\SpoonDirectory::exists($imagePath . '/200x200')) {
                    \SpoonDirectory::create($imagePath . '/200x200');
                }
                if (!\SpoonDirectory::exists($imagePath . '/source')) {
                    \SpoonDirectory::create($imagePath . '/source');
                }

                // image provided?
                if ($fields['logo']->isFilled()) {
                    // build the image name
                    $item['logo'] = $this->meta->getUrl() . '.' . $fields['logo']->getExtension();

                    // upload the image & generate thumbnails
                    $fields['logo']->generateThumbnails($imagePath, $item['logo']);
                }
                $item['url'] = $fields['url']->getValue();
                $item['sequence'] = BackendLogosModel::getMaximumSequence() + 1;
                $item['category_id'] = $this->frm->getField('category_id')->getValue();

                $item['meta_id'] = $this->meta->save();

                // insert it
                $item['id'] = BackendLogosModel::insert($item);

                $this->redirect(
                    Model::createURLForAction('Index') . '&report=added&highlight=row-' . $item['id']
                );
            }
        }
    }
}
