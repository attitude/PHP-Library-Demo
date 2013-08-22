<?php

define('MEMORY_GET_USAGE_REAL', false);
$memory_get_usage_start = memory_get_usage(MEMORY_GET_USAGE_REAL);

/**
 * Dumps variable contents inside of the `PRE` tag
 *
 * @param   mixed   $v  Variable to dump
 * @returns void
 *
 */
function print_pre($v)
{
    echo '<pre>'.print_r($v,1).'</pre>';
}

/* Set max error reporting */
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Serializer */

require_once dirname(dirname(__FILE__)).'/src/attitude/autoload.php';
