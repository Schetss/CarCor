<?php

namespace Backend\Modules\Logos\Actions;

use Backend\Core\Engine\Base\ActionAdd;
use Backend\Core\Engine\Form;
use Backend\Core\Engine\Language;
use Backend\Core\Engine\Meta;
use Backend\Core\Engine\Model;
use Backend\Modules\Logos\Engine\Model as BackendLogosModel;

/**
 * This is the add category-action, it will display a form to create a new category
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class AddCategory extends ActionAdd
{
    /**
     * Execute the action
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
    private function loadForm()
    {
        $this->frm = new Form('addCategory');
        $this->frm->addText('title');

        $this->meta = new Meta($this->frm, null, 'title', true);
        $this->meta->setURLCallback('Backend\Modules\Logos\Engine\Model', 'getURLForCategory');
    }

    /**
     * Validate the form
     */
    private function validateForm()
    {
        if ($this->frm->isSubmitted()) {
            $this->frm->cleanupFields();

            // validate fields
            $this->frm->getField('title')->isFilled(Language::err('TitleIsRequired'));
            $this->meta->validate();

            if ($this->frm->isCorrect()) {
                // build item
                $item = array();
                $item['title'] = $this->frm->getField('title')->getValue();
                $item['language'] = Language::getWorkingLanguage();
                $item['meta_id'] = $this->meta->save();
                $item['sequence'] = BackendLogosModel::getMaximumCategorySequence() + 1;

                // save the data
                $item['id'] = BackendLogosModel::insertCategory($item);

                // everything is saved, so redirect to the overview
                $this->redirect(
                    Model::createURLForAction('categories') .
                    '&report=added-category&var=' . urlencode($item['title']) .
                    '&highlight=row-' . $item['id']
                );
            }
        }
    }
}
