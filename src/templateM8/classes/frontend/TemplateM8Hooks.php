<?php
/**
 *
 *          _           _                       _
 *         | |         | |                     | |
 *      ___| | __ _ ___| |____      _____  _ __| | _____
 *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
 *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
 *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
 *                                        web development
 *
 *     http://www.slash-works.de </> hallo@slash-works.de
 *
 *
 * @author      jrgregory <joe@slash-works.de>
 * @since       15.10.2015
 * @package     templateM8
 *
 */

namespace Slashworks\TemplateM8\Classes\Backend;

class TemplateM8Hooks
{
    /**
     * Hook into parsTemplates and add new templates
     * @param $objTemplate
     */
    public function parseTemplate($objTemplate)
    {

        if(TL_MODE === 'FE') {
            if (($objTemplate->templateM8 != '' && substr( $objTemplate->templateM8, 0, 3 ) === "m8_"))
            {
                $objTemplate->setName($objTemplate->templateM8);
            }
        }
    }
}