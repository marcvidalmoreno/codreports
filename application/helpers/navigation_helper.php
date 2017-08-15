<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 *
 * @package	CodeIgniter
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Navigation Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 */

// ------------------------------------------------------------------------

if ( ! function_exists('active_link'))
{
	/**
	 * Active link
	 *
	 * Add active class to current menu or highlight current page in menu item
	 *
	 * @param	string 	$controller
	 * @param	string 	$action
	 * @return	mixed	depends on what the array contains
	 */
	function active_link($controller, $action) {
        $CI =& get_instance();
        $class = $CI->router->fetch_class();
		$method = $CI->router->fetch_method();
        return ($class == $controller && $method == $action) ? 'active' : '';
	}
}

