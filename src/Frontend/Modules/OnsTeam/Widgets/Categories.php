<?php

namespace Frontend\Modules\OnsTeam\Widgets;

use Frontend\Core\Engine\Base\Widget;
use Frontend\Core\Engine\Navigation;
use Frontend\Modules\OnsTeam\Engine\Model as FrontendOnsTeamModel;

/**
 * This is a widget with the Ons team-categories
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class Categories extends Widget
{
    /**
     * Execute the extra
     */
    public function execute()
    {
        parent::execute();
        $this->loadTemplate();
        $this->parse();
    }

    /**
     * Parse
     */
    private function parse()
    {
        // get categories
        $categories = FrontendOnsTeamModel::getAllCategories();

        // any categories?
        if (!empty($categories)) {
            // build link
            $link = Navigation::getURLForBlock('OnsTeam', 'category');

            // loop and reset url
            // foreach ($categories as &$row) {
            //     $row['url'] = $link . '/' . $row['url'];
            // }
        }

        // assign comments
        $this->tpl->assign('widgetOnsTeamCategories', $categories);
    }
}
