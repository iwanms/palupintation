<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '153.92.15.53',
	'username' => 'u425705817_iwan',
	'password' => 'Iwan_71095',
	'database' => 'u425705817_palupin',
	// 'hostname' => 'localhost',
	// 'username' => 'root',
	// 'password' => '',
	// 'database' => 'db_palupintation',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	// 'db_debug' => (ENVIRONMENT !== 'production'),
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
