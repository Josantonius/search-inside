<?php
/**
 * Search Inside Wordpress Plugin.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Search-Inside.git
 * @since      1.1.3
 */

$pluginName = 'SearchInside';

return [

    'namespaces' => [
    
        'modules'         => $pluginName . '\\Modules\\',
        'admin-page'      => $pluginName . '\\Controller\\Admin\\Page\\',
        'admin-component' => $pluginName . '\\Controller\\Admin\\Component\\',
        'controller'      => $pluginName . '\\Controller\\',
    ],
];
