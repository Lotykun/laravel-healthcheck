<?php
return [

	/**
	 * Set to false to disable the healthcheck route
	 */
	'enable' => true,

	/**
	 * The GET route where the healthcheck is performed
	 */
	'route' => '/healthcheck',

	/**
	 * Decides which healthchecks are performed
	 *
	 * Available:
	 * - database
	 * - storage
	 */
	'checks' => [
		'database',
		'storage'
	],

	/**
	 * Database options:
	 *
	 * Database => tablename.
	 * Tested by doing a select limit 1 on
	 */
	'database' => [
		'dbname' => 'dbtable',
	],

	/**
	 * Array of pathes to check for write access
	 * Tested by trying to write the current date to PATH/healthcheck.txt
	 */
	'storage' => [
		storage_path()
	],
];
