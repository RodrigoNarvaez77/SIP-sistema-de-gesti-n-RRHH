<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'local';
$active_record = TRUE;

$db['local']['hostname'] = 'localhost';
$db['local']['username'] = 'root';
$db['local']['password'] = '';//demente
$db['local']['database'] = 'sip';
//$db['local']['database'] = 'base1';
//$db['local']['database'] = 'sgo_est';
//$db['local']['port']     = 3050;
$db['local']['dbdriver'] = 'mysql';
$db['local']['dbprefix'] = '';
$db['local']['pconnect'] = FALSE;
$db['local']['db_debug'] = TRUE;
$db['local']['cache_on'] = FALSE;
$db['local']['cachedir'] = '';
$db['local']['char_set'] = 'utf8';
$db['local']['dbcollat'] = 'utf8_general_ci';
$db['local']['swap_pre'] = '';
$db['local']['autoinit'] = TRUE;
$db['local']['stricton'] = FALSE;


/*$db['local']['hostname'] = 'localhost';
$db['local']['username'] = 'SYSDBA';
$db['local']['password'] = 'integra';//demente
$db['local']['database'] = 'C:\SISTEMAS_INTEGRA.FDB';
$db['local']['port']      = 3050;
$db['local']['dbdriver'] = 'firebird';
$db['local']['dbprefix'] = '';
$db['local']['pconnect'] = FALSE;
$db['local']['db_debug'] = TRUE;
$db['local']['cache_on'] = FALSE;
$db['local']['cachedir'] = '';
$db['local']['char_set'] = 'utf8';
$db['local']['dbcollat'] = 'utf8_general_ci';
$db['local']['swap_pre'] = '';
$db['local']['autoinit'] = TRUE;
$db['local']['stricton'] = FALSE;*/

// $db['externo']['hostname'] = 'mysql.integraest.cl';
// $db['externo']['username'] = 'usr_sistema';
// $db['externo']['password'] = 'integra123';//demente
// $db['externo']['database'] = 'sgo_est';
// $db['externo']['dbdriver'] = 'mysql';
// $db['externo']['dbprefix'] = '';
// $db['externo']['pconnect'] = TRUE;
// $db['externo']['db_debug'] = TRUE;
// $db['externo']['cache_on'] = FALSE;
// $db['externo']['cachedir'] = '';
// $db['externo']['char_set'] = 'utf8';
// $db['externo']['dbcollat'] = 'utf8_spanish2_ci';
// $db['externo']['swap_pre'] = '';
// $db['externo']['autoinit'] = TRUE;
// $db['externo']['stricton'] = FALSE;



/* End of file database.php */
/* Location: ./application/config/database.php */