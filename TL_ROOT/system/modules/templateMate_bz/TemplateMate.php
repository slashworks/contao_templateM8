<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package TemplateMate_bz
 * @copyright Joe Ray Gregory 2012-2013 jrgregory@borowiakziehe.de
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

class TemplateMate
{
    /**
     * Hook into parsTemplates and add new templates
     * @param $objTemplate
     */
    public function parseTemplate($objTemplate)
    {
        if ($objTemplate->templateMate != '')
        {
            $objTemplate->setName($objTemplate->templateMate);
        }


    }
}