<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package TemplateM8
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Helpers
	'slashworks\TemplateM8Helper' => 'system/modules/templateM8/helpers/TemplateM8Helper.php',

	// Hooks
	'slashworks\TemplateM8Hooks'  => 'system/modules/templateM8/hooks/TemplateM8Hooks.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_templateM8' => 'system/modules/templateM8/templates',
));
