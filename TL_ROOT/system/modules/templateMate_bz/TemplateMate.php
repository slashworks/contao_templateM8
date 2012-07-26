<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jrgregory
 * Date: 04.07.12
 * Time: 17:32
 * To change this template use File | Settings | File Templates.
 */
class TemplateMate
{
    public function parseTemplate($objTemplate)
    {

        if ($objTemplate->templateMate != '')
        {
            $objTemplate->setName($objTemplate->templateMate);
        }


    }
}