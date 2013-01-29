<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package TemplateMate_bz
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'TemplateMate' => 'system/modules/templateMate_bz/TemplateMate.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_text_accordion'  => 'system/modules/templateMate_bz/templates',
	'ce_text_withSymbol' => 'system/modules/templateMate_bz/templates',
));
