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

/**
 * Table tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('Slashworks\TemplateM8\Classes\Backend\DcaTemplateM8', 'resetTemplate');

foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $k => $v)
{
    if(!is_array($v))
    {

        $GLOBALS['TL_DCA']['tl_content']['palettes'][$k] .= ';{templateM8_legend},templateM8;';

    }
}

$GLOBALS['TL_DCA']['tl_content']['fields']['templateM8'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['templateM8'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options_callback'        => array('Slashworks\TemplateM8\Classes\Backend\DcaTemplateM8', 'getTemplates'),
    'eval'                    => array('tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
