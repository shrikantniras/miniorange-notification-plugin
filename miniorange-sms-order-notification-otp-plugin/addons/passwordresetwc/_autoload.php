<?php

if(! defined( 'ABSPATH' )) exit;

define('WCPR_DIR', plugin_dir_path(__FILE__));
define('WCPR_URL', plugin_dir_url(__FILE__));
define('WCPR_VERSION', '1.0.0');
define('WCPR_CSS_URL', WCPR_URL . 'includes/css/settings.min.css?version='.WCPR_VERSION);

/*
 |------------------------------------------------------------------------------------------------------
 | SOME COMMON FUNCTIONS USED ALL OVER THE ADD-ON
 |------------------------------------------------------------------------------------------------------
 */


/**
 * This function is used to handle the add-ons get option call. A separate function has been created so that
 * we can manage getting of database values all from one place. Any changes need to be made can be made here
 * rather than having to make changes in all of the add-on files.
 *
 * Calls the mains plugins get_mo_option function.
 *
 * @param $string - option name
 * @param bool $prefix
 * @return String
 */
function get_wcpr_option($string,$prefix=null)
{
    $string = ($prefix==null ? "mo_wc_pr_" : $prefix) . $string;
    return get_mo_option($string,'');
}


/**
 * This function is used to handle the add-ons update option call. A separate function has been created so that
 * we can manage getting of database values all from one place. Any changes need to be made can be made here
 * rather than having to make changes in all of the add-on files.
 *
 * Calls the mains plugins get_mo_option function.
 *
 * @param $optionName
 * @param $value
 * @param null $prefix
 */
function update_wcpr_option($optionName,$value,$prefix=null)
{
    $optionName = ($prefix===null ? "mo_wc_pr_" : $prefix) . $optionName;
    update_mo_option($optionName,$value,'');
}

