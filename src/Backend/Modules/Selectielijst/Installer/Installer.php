<?php

namespace Backend\Modules\Selectielijst\Installer;

use Backend\Core\Installer\ModuleInstaller;

/**
 * Installer for the Selectielijst module
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
        $this->addModule('Selectielijst');

        // install the locale, this is set here beceause we need the module for this
        $this->importLocale(dirname(__FILE__) . '/Data/locale.xml');

        $this->setModuleRights(1, 'Selectielijst');

        $this->setActionRights(1, 'Selectielijst', 'Index');
        $this->setActionRights(1, 'Selectielijst', 'Add');
        $this->setActionRights(1, 'Selectielijst', 'Edit');
        $this->setActionRights(1, 'Selectielijst', 'Delete');
        $this->setActionRights(1, 'selectielijst', 'Sequence');
        $this->setActionRights(1, 'Selectielijst', 'Categories');
        $this->setActionRights(1, 'Selectielijst', 'AddCategory');
        $this->setActionRights(1, 'Selectielijst', 'EditCategory');
        $this->setActionRights(1, 'Selectielijst', 'DeleteCategory');
        $this->setActionRights(1, 'Selectielijst', 'SequenceCategories');

        $this->insertExtra('Selectielijst', 'block', 'SelectielijstCategory', 'Category', null, 'N', 1002);
        $this->insertExtra('Selectielijst', 'widget', 'Categories', 'Categories', null, 'N', 1003);


        // add extra's
        $subnameID = $this->insertExtra('Selectielijst', 'block', 'Selectielijst');
        $this->insertExtra('Selectielijst', 'block', 'SelectielijstDetail', 'Detail');

        $navigationModulesId = $this->setNavigation(null, 'Modules');
        $navigationSelectielijstId = $this->setNavigation($navigationModulesId, 'Selectielijst');
        $this->setNavigation(
            $navigationSelectielijstId,
            'Selectielijst',
            'selectielijst/index',
            array('selectielijst/add', 'selectielijst/edit')
        );
        $this->setNavigation(
            $navigationSelectielijstId,
            'Categories',
            'selectielijst/categories',
            array('selectielijst/add_category', 'selectielijst/edit_category')
        );

    }
}
