<?php

namespace Backend\Modules\Kwaliteitslabels\Installer;

use Backend\Core\Installer\ModuleInstaller;

/**
 * Installer for the Kwaliteitslabels module
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class Installer extends ModuleInstaller
{
    public function install()
    {
        // import the sql
        $this->importSQL(dirname(__FILE__) . '/Data/install.sql');

        // install the module in the database
        $this->addModule('Kwaliteitslabels');

        // install the locale, this is set here beceause we need the module for this
        $this->importLocale(dirname(__FILE__) . '/Data/locale.xml');

        $this->setModuleRights(1, 'Kwaliteitslabels');

        $this->setActionRights(1, 'Kwaliteitslabels', 'Index');
        $this->setActionRights(1, 'Kwaliteitslabels', 'Add');
        $this->setActionRights(1, 'Kwaliteitslabels', 'Edit');
        $this->setActionRights(1, 'Kwaliteitslabels', 'Delete');
        $this->setActionRights(1, 'kwaliteitslabels', 'Sequence');
        $this->setActionRights(1, 'Kwaliteitslabels', 'Categories');
        $this->setActionRights(1, 'Kwaliteitslabels', 'AddCategory');
        $this->setActionRights(1, 'Kwaliteitslabels', 'EditCategory');
        $this->setActionRights(1, 'Kwaliteitslabels', 'DeleteCategory');
        $this->setActionRights(1, 'Kwaliteitslabels', 'SequenceCategories');

        $this->insertExtra('Kwaliteitslabels', 'block', 'KwaliteitslabelsCategory', 'Category', null, 'N', 1002);
        $this->insertExtra('Kwaliteitslabels', 'widget', 'Categories', 'Categories', null, 'N', 1003);


        // add extra's
        $subnameID = $this->insertExtra('Kwaliteitslabels', 'block', 'Kwaliteitslabels');
        $this->insertExtra('Kwaliteitslabels', 'block', 'KwaliteitslabelsDetail', 'Detail');

        $navigationModulesId = $this->setNavigation(null, 'Modules');
        $navigationKwaliteitslabelsId = $this->setNavigation($navigationModulesId, 'Kwaliteitslabels');
        $this->setNavigation(
            $navigationKwaliteitslabelsId,
            'Kwaliteitslabels',
            'kwaliteitslabels/index',
            array('kwaliteitslabels/add', 'kwaliteitslabels/edit')
        );
        $this->setNavigation(
            $navigationKwaliteitslabelsId,
            'Categories',
            'kwaliteitslabels/categories',
            array('kwaliteitslabels/add_category', 'kwaliteitslabels/edit_category')
        );

    }
}
