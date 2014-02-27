<?php
/**
 * Created by PhpStorm.
 * User: jrgregory
 * Date: 20.01.14
 * Time: 17:43
 */

namespace slashworks;


use Contao\Controller;

class TemplateM8Helper extends Controller {

    public static function getTemplateM8Group($strPrefix)
    {
        $arrTemplates = array();

        // Get the default templates
        foreach (\TemplateLoader::getPrefixedFiles('m8_'.$strPrefix) as $strTemplate)
        {
            $arrTemplates[$strTemplate] = $strTemplate;
        }

        $arrCustomized = glob(TL_ROOT . '/templates/' . $strPrefix . '*');

        // Add the customized templates
        if (is_array($arrCustomized))
        {
            foreach ($arrCustomized as $strFile)
            {
                $strTemplate = basename($strFile, strrchr($strFile, '.'));

                if (!isset($arrTemplates[$strTemplate]))
                {
                    $arrTemplates[$strTemplate] = $strTemplate;
                }
            }
        }

        // Do not look for back end templates in theme folders (see #5379)
        if ($strPrefix == 'be_' || $strPrefix == 'mail_')
        {
            return $arrTemplates;
        }

        // Try to select the themes (see #5210)
        try
        {
            $objTheme = \ThemeModel::findAll(array('order'=>'name'));
        }
        catch (\Exception $e)
        {
            $objTheme = null;
        }

        // Add the theme templates
        if ($objTheme !== null)
        {
            while ($objTheme->next())
            {
                if ($objTheme->templates != '')
                {
                    $arrThemeTemplates = glob(TL_ROOT . '/' . $objTheme->templates . '/' . $strPrefix . '*');

                    if (is_array($arrThemeTemplates))
                    {
                        foreach ($arrThemeTemplates as $strFile)
                        {
                            $strTemplate = basename($strFile, strrchr($strFile, '.'));

                            if (!isset($arrTemplates[$strTemplate]))
                            {
                                $arrTemplates[$strTemplate] = $strTemplate . ' (' . sprintf($GLOBALS['TL_LANG']['MSC']['templatesTheme'], $objTheme->name) . ')';
                            }
                            else
                            {
                                $arrTemplates[$strTemplate] .= ' (' . sprintf($GLOBALS['TL_LANG']['MSC']['templatesTheme'], $objTheme->name) . ')';
                            }
                        }
                    }
                }
            }
        }

        return $arrTemplates;
    }


} 