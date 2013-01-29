<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Joe Ray Gregory @ borowiakziehe KG 2012
 * @author     Joe Ray Gregory @ borowiakziehe KG 2012 info@borowiakziehe.de
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] = $GLOBALS['TL_DCA']['tl_content']['palettes']['text'].',templateMate;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = $GLOBALS['TL_DCA']['tl_content']['palettes']['image'].',templateMate;';

/*foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $k => $v)
{
    if(!is_array($v))
    {
        $GLOBALS['TL_DCA']['tl_content']['palettes'][$k] .= ',templateMate;';
    }
}*/

$GLOBALS['TL_DCA']['tl_content']['fields']['templateMate'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['templateMate'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_templateMate', 'getTemplates'),
    'eval'                    => array('tl_class'=>'clr')
);

class tl_templateMate extends Backend
{
    public function getTemplates(DataContainer $dc)
    {
        $group = 'ce_'.$dc->activeRecord->type;
        $tplGroup = $this->getTemplateGroup($group);
        $r = array();
        foreach($tplGroup as $template)
        {
            if($group === $template) {
                $r[$template] = $GLOBALS['TL_LANG']['templateMate']['standard'];
            } else {
                $r[$template] = ($GLOBALS['TL_LANG']['templateMate'][$template]) ? $r[$template] = $GLOBALS['TL_LANG']['templateMate'][$template] : $template;
            }

        }

        return $r;
    }
}