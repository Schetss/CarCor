<?php

namespace Frontend\Modules\Kwaliteitslabels\Widgets;

use Frontend\Core\Engine\Base\Widget;
use Frontend\Core\Engine\Navigation;
use Frontend\Modules\Kwaliteitslabels\Engine\Model as FrontendKwaliteitslabelsModel;

/**
 * This is a widget with the Kwaliteitslabels-categories
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
        $categories = FrontendKwaliteitslabelsModel::getAllCategories();

        // any categories?
        if (!empty($categories)) {
            // build link
            $link = Navigation::getURLForBlock('Kwaliteitslabels', 'category');

            // // loop and reset url
            // foreach ($categories as &$row) {
            //     $row['url'] = $link . '/' . $row['url'];
            // }
        }

        // assign comments
        $this->tpl->assign('widgetKwaliteitslabelsCategories', $categories);
    }
}
