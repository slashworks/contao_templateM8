<?php

namespace slashworks;

use Contao\BackendTemplate;
use Contao\Frontend;
use Contao\FrontendTemplate;

class TemplateM8Hooks
{
    /**
     * Hook into parsTemplates and add new templates
     * @param $objTemplate
     */
    public function parseTemplate($objTemplate)
    {

        if(TL_MODE === 'FE') {
            if ($objTemplate->templateM8 != '' && substr( $objTemplate->templateM8, 0, 3 ) === "m8_")
            {
                $objTemplate->setName($objTemplate->templateM8);
            }
        }

        if(TL_MODE === 'BE') {
            if ($objTemplate->templateM8 != '')
            {

            }
        }
    }
}