<?php

namespace Backend\Modules\OnsTeam\Installer;

use Backend\Core\Installer\ModuleInstaller;

/**
 * Installer for the Ons team module
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
        $this->addModule('OnsTeam');

        // install the locale, this is set here beceause we need the module for this
        $this->importLocale(dirname(__FILE__) . '/Data/locale.xml');

        $this->setModuleRights(1, 'OnsTeam');

        $this->setActionRights(1, 'OnsTeam', 'Index');
        $this->setActionRights(1, 'OnsTeam', 'Add');
        $this->setActionRights(1, 'OnsTeam', 'Edit');
        $this->setActionRights(1, 'OnsTeam', 'Delete');
        $this->setActionRights(1, 'ons_team', 'Sequence');
        $this->setActionRights(1, 'OnsTeam', 'Categories');
        $this->setActionRights(1, 'OnsTeam', 'AddCategory');
        $this->setActionRights(1, 'OnsTeam', 'EditCategory');
        $this->setActionRights(1, 'OnsTeam', 'DeleteCategory');
        $this->setActionRights(1, 'OnsTeam', 'SequenceCategories');

        $this->insertExtra('OnsTeam', 'block', 'OnsTeamCategory', 'Category', null, 'N', 1002);
        $this->insertExtra('OnsTeam', 'widget', 'Categories', 'Categories', null, 'N', 1003);


        // add extra's
        $subnameID = $this->insertExtra('OnsTeam', 'block', 'OnsTeam');
        $this->insertExtra('OnsTeam', 'block', 'OnsTeamDetail', 'Detail');

        $navigationModulesId = $this->setNavigation(null, 'Modules');
        $navigationOnsTeamId = $this->setNavigation($navigationModulesId, 'OnsTeam');
        $this->setNavigation(
            $navigationOnsTeamId,
            'OnsTeam',
            'ons_team/index',
            array('ons_team/add', 'ons_team/edit')
        );
        $this->setNavigation(
            $navigationOnsTeamId,
            'Categories',
            'ons_team/categories',
            array('ons_team/add_category', 'ons_team/edit_category')
        );

    }
}
