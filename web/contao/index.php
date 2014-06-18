<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Contao;

// Set the script name
define('TL_SCRIPT', 'contao/index.php');

// Initialize the system
define('TL_MODE', 'BE');
require dirname(dirname(__DIR__)) . '/system/initialize.php';

// Run the controller
$controller = new BackendIndex;
$controller->run();