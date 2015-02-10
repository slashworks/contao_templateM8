<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jrgregory
 * Date: 04.07.12
 * Time: 17:31
 * To change this template use File | Settings | File Templates.
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('slashworks\TemplateM8Hooks', 'parseTemplate');