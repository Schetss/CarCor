<?php

namespace Frontend\Modules\Werkwijze\Widgets;

use Frontend\Core\Engine\Base\Widget;
use Frontend\Core\Engine\Navigation;
use Frontend\Modules\Werkwijze\Engine\Model as FrontendWerkwijzeModel;

/**
 * This is a widget with the Werkwijze-categories
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
        $categories = FrontendWerkwijzeModel::getAllCategories();

        // any categories?
        if (!empty($categories)) {
            // build link
            $link = Navigation::getURLForBlock('Werkwijze', 'category');

            // loop and reset url
            // foreach ($categories as &$row) {
            //     $row['url'] = $link . '/' . $row['url'];
            // }
        }

        // assign comments
        $this->tpl->assign('widgetWerkwijzeCategories', $categories);
    }
}
