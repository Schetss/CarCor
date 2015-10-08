<?php

namespace Backend\Modules\Kwaliteitslabels\Actions;

use Backend\Core\Engine\Base\ActionDelete;
use Backend\Core\Engine\Model;
use Backend\Modules\Kwaliteitslabels\Engine\Model as BackendKwaliteitslabelsModel;

/**
 * This is the delete-action, it deletes an item
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class Delete extends ActionDelete
{
    /**
     * Execute the action
     */
    public function execute()
    {
        $id = $this->getParameter('id', 'int');

        // does the item exist
        if ($id === null || !BackendKwaliteitslabelsModel::exists($id)) {
            return $this->redirect(
                Model::createURLForAction('Index') . '&error=non-existing'
            );
        }

        parent::execute();

        $record = (array) BackendKwaliteitslabelsModel::get($id);
        BackendKwaliteitslabelsModel::delete($id);

        $this->redirect(
            Model::createURLForAction('Index') . '&report=deleted&var=' .
            urlencode($record['title'])
        );
    }
}
