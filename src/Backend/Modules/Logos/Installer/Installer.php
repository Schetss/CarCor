<?php

namespace Backend\Modules\Logos\Installer;

use Backend\Core\Installer\ModuleInstaller;

/**
 * Installer for the Logos module
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
        $this->addModule('Logos');

        // install the locale, this is set here beceause we need the module for this
        $this->importLocale(dirname(__FILE__) . '/Data/locale.xml');

        $this->setModuleRights(1, 'Logos');

        $this->setActionRights(1, 'Logos', 'Index');
        $this->setActionRights(1, 'Logos', 'Add');
        $this->setActionRights(1, 'Logos', 'Edit');
        $this->setActionRights(1, 'Logos', 'Delete');
        $this->setActionRights(1, 'logos', 'Sequence');
        $this->setActionRights(1, 'Logos', 'Categories');
        $this->setActionRights(1, 'Logos', 'AddCategory');
        $this->setActionRights(1, 'Logos', 'EditCategory');
        $this->setActionRights(1, 'Logos', 'DeleteCategory');
        $this->setActionRights(1, 'Logos', 'SequenceCategories');

        $this->insertExtra('Logos', 'block', 'LogosCategory', 'Category', null, 'N', 1002);
        $this->insertExtra('Logos', 'widget', 'Categories', 'Categories', null, 'N', 1003);


        // add extra's
        $subnameID = $this->insertExtra('Logos', 'block', 'Logos');
        $this->insertExtra('Logos', 'block', 'LogosDetail', 'Detail');

        $navigationModulesId = $this->setNavigation(null, 'Modules');
        $navigationLogosId = $this->setNavigation($navigationModulesId, 'Logos');
        $this->setNavigation(
            $navigationLogosId,
            'Logos',
            'logos/index',
            array('logos/add', 'logos/edit')
        );
        $this->setNavigation(
            $navigationLogosId,
            'Categories',
            'logos/categories',
            array('logos/add_category', 'logos/edit_category')
        );

    }
}
