<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Slashworks\TemplateM8\Classes\Backend\DcaTemplateM8'   => 'system/modules/templateM8/classes/backend/DcaTemplateM8.php',
	'Slashworks\TemplateM8\Classes\Backend\TemplateM8Hooks' => 'system/modules/templateM8/classes/frontend/TemplateM8Hooks.php',
));
