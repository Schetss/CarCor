<?php

namespace Frontend\Modules\Logos\Widgets;

use Frontend\Core\Engine\Base\Widget;
use Frontend\Core\Engine\Navigation;
use Frontend\Modules\Logos\Engine\Model as FrontendLogosModel;

/**
 * This is a widget with the Logos-categories
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
class Quality extends Widget
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
        $categories = FrontendLogosModel::getAllQualities();

        // any categories?
        if (!empty($categories)) {
            // build link
            $link = Navigation::getURLForBlock('Logos', 'category');

            // loop and reset url
            // foreach ($categories as &$row) {
            //     $row['url'] = $link . '/' . $row['url'];
            // }
        }

        // assign comments
        $this->tpl->assign('widgetLogosQualities', $categories);
    }
}
