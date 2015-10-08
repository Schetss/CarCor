<?php

namespace Backend\Modules\Kwaliteitslabels\Actions;

use Backend\Core\Engine\Base\ActionEdit;
use Backend\Core\Engine\Form;
use Backend\Core\Engine\Language;
use Backend\Core\Engine\Meta;
use Backend\Core\Engine\Model;
use Backend\Modules\Kwaliteitslabels\Engine\Model as BackendKwaliteitslabelsModel;
use Backend\Modules\Search\Engine\Model as BackendSearchModel;
use Backend\Modules\Tags\Engine\Model as BackendTagsModel;
use Backend\Modules\Users\Engine\Model as BackendUsersModel;

/**
 * This is the edit-action, it will display a form with the item data to edit
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class Edit extends ActionEdit
{
    /**
     * Execute the action
     */
    public function execute()
    {
        parent::execute();

        $this->loadData();
        $this->loadForm();
        $this->validateForm();

        $this->parse();
        $this->display();
    }

    /**
     * Load the item data
     */
    protected function loadData()
    {
        $this->id = $this->getParameter('id', 'int', null);
        if ($this->id == null || !BackendKwaliteitslabelsModel::exists($this->id)) {
            $this->redirect(
                Model::createURLForAction('Index') . '&error=non-existing'
            );
        }

        $this->record = BackendKwaliteitslabelsModel::get($this->id);
    }

    /**
     * Load the form
     */
    protected function loadForm()
    {
        // create form
        $this->frm = new Form('edit');

        $this->frm->addText('naam', $this->record['naam'], null, 'inputText title', 'inputTextError title');
        $this->frm->addEditor('omschrijving', $this->record['omschrijving']);
        $this->frm->addImage('logo');
        $this->frm->addImage('achtergrondafbeelding');

        // get categories
        $categories = BackendKwaliteitslabelsModel::getCategories();
        $this->frm->addDropdown('category_id', $categories, $this->record['category_id']);

        // meta
        $this->meta = new Meta($this->frm, $this->record['meta_id'], 'naam', true);
        $this->meta->setUrlCallBack('Backend\Modules\Kwaliteitslabels\Engine\Model', 'getUrl', array($this->record['id']));

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


        $this->tpl->assign('item', $this->record);
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
                $item = array();
                $item['id'] = $this->id;
                $item['language'] = Language::getWorkingLanguage();

                $item['naam'] = $fields['naam']->getValue();
                $item['omschrijving'] = $fields['omschrijving']->getValue();

                // the image path
                $imagePath = FRONTEND_FILES_PATH . '/' . $this->getModule() . '/logo';

                // create folders if needed
                if (!\SpoonDirectory::exists($imagePath . '/200x200')) {
                    \SpoonDirectory::create($imagePath . '/200x200');
                }
                if (!\SpoonDirectory::exists($imagePath . '/100x100')) {
                    \SpoonDirectory::create($imagePath . '/100x100');
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

                // the image path
                $imagePath = FRONTEND_FILES_PATH . '/' . $this->getModule() . '/achtergrondafbeelding';

                // create folders if needed
                if (!\SpoonDirectory::exists($imagePath . '/400x300')) {
                    \SpoonDirectory::create($imagePath . '/400x300');
                }
                if (!\SpoonDirectory::exists($imagePath . '/source')) {
                    \SpoonDirectory::create($imagePath . '/source');
                }

                // image provided?
                if ($fields['achtergrondafbeelding']->isFilled()) {
                    // build the image name
                    $item['achtergrondafbeelding'] = $this->meta->getUrl() . '.' . $fields['achtergrondafbeelding']->getExtension();

                    // upload the image & generate thumbnails
                    $fields['achtergrondafbeelding']->generateThumbnails($imagePath, $item['achtergrondafbeelding']);
                }
                $item['category_id'] = $this->frm->getField('category_id')->getValue();

                $item['meta_id'] = $this->meta->save();

                BackendKwaliteitslabelsModel::update($item);
                $item['id'] = $this->id;

                $this->redirect(
                    Model::createURLForAction('Index') . '&report=edited&highlight=row-' . $item['id']
                );
            }
        }
    }
}
