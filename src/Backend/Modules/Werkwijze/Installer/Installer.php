<?php

namespace Backend\Modules\Werkwijze\Installer;

use Backend\Core\Installer\ModuleInstaller;

/**
 * Installer for the Werkwijze module
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
        $this->addModule('Werkwijze');

        // install the locale, this is set here beceause we need the module for this
        $this->importLocale(dirname(__FILE__) . '/Data/locale.xml');

        $this->setModuleRights(1, 'Werkwijze');

        $this->setActionRights(1, 'Werkwijze', 'Index');
        $this->setActionRights(1, 'Werkwijze', 'Add');
        $this->setActionRights(1, 'Werkwijze', 'Edit');
        $this->setActionRights(1, 'Werkwijze', 'Delete');
        $this->setActionRights(1, 'werkwijze', 'Sequence');
        $this->setActionRights(1, 'Werkwijze', 'Categories');
        $this->setActionRights(1, 'Werkwijze', 'AddCategory');
        $this->setActionRights(1, 'Werkwijze', 'EditCategory');
        $this->setActionRights(1, 'Werkwijze', 'DeleteCategory');
        $this->setActionRights(1, 'Werkwijze', 'SequenceCategories');

        $this->insertExtra('Werkwijze', 'block', 'WerkwijzeCategory', 'Category', null, 'N', 1002);
        $this->insertExtra('Werkwijze', 'widget', 'Categories', 'Categories', null, 'N', 1003);


        // add extra's
        $subnameID = $this->insertExtra('Werkwijze', 'block', 'Werkwijze');
        $this->insertExtra('Werkwijze', 'block', 'WerkwijzeDetail', 'Detail');

        $navigationModulesId = $this->setNavigation(null, 'Modules');
        $navigationWerkwijzeId = $this->setNavigation($navigationModulesId, 'Werkwijze');
        $this->setNavigation(
            $navigationWerkwijzeId,
            'Werkwijze',
            'werkwijze/index',
            array('werkwijze/add', 'werkwijze/edit')
        );
        $this->setNavigation(
            $navigationWerkwijzeId,
            'Categories',
            'werkwijze/categories',
            array('werkwijze/add_category', 'werkwijze/edit_category')
        );

    }
}
