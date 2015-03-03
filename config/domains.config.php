<?php
/*
	'libraries_profile' => 'default', // This profile defines the versions of libraries your project will use.
										// By default (if you don't add this variable in your domains.config) will use "common" profile.
	);
	Redirections use the EXACT term in the host, and needs the format
	$config['redirections'] = array( array( 'from' => 'domain.old', 'to' => 'http://domain.new' ), array( 'from' => 'domain2.old', 'to' => 'http://domain.new' ),... );
	FROM: is only the host while TO contains the protocol.

	Use $config['core_inheritance'] for active new versions of core.
		$config['core_inheritance'] = array( 'Sifo', 'Sifo5.3' );  // For work with SIFO for php5.3
    $config['core_inheritance'] = array( 'Sifo' );

 */

// Define the inheritance of this instance (which instances are their parents:
$config['instance_inheritance'] = array( 'common' );

/*$config['redirections'] = array(
	array( 'from' => 'www.sifo.local', 'to' => 'http://sifo.local' ),
	array( 'from' => 'www2.sifo.local', 'to' => 'http://sifo.local' ),
);*/

// This is used by external scripts in order to know if this is an executable instance or an abstract one.
$config['instance_type'] = 'instantiable';

$config['simpleblog.dev'] = array(
	'devel' => true, // Domain is marked as development
	'has_debug' => true, // Domain shows the floating debug box.
	'instance' => 'simpleblog',
	'language' => 'en_US',
	'language_domain' =>'messages',
	'lang_in_subdomain' => array( 'es' => 'es_ES', 'en' => 'en_US' ),
	'www_as_subdomain' => false,
	'static_host' => 'http://static.simpleblog.dev',
	//'media_host' => 'http://static.sifo.local', // Alternative static content (media). Comment to disable.
	'database' => array(
		// If you need a master/slave schema enable the 'profile' line below:
		// 'profile' => 'PRODUCTION', // Use this option for MASTER/SLAVE configurations and fill db_profiles.config.php with credentials.
		'db_driver' => 'mysql', // To use transactions you must use mysqli driver.
		'db_host' => '127.0.0.1',
		'db_user' => 'root',
		'db_password' => '',
		'db_name' => 'simpleblog',
		'db_init_commands' => array( 'SET NAMES utf8' ) // Commands launched before the queries.
	),
	/* REDIS syntax:
	'database' => array(
		'database' => array(
		'host'     => '127.0.0.1',
		'port'     => 6379,
		'database' => 0
	),
    // Sphinx connection parameters.
    // This definition has priority over the sphinx.config file, use it wisely.
	'sphinx' => array(
		'active' => true,
		'server' => 'localhost',
		'port' => 9312
	),
	 */
	'php_ini_sets' => array( // Empty array if you don't want any php.ini overriden.
		// Log errors to 'logs' folder:
		'log_errors' => 'On',
		'error_log' => ROOT_PATH . '/logs/errors_' . date( 'Y-m' ) . '.log', // Store a different error file per month. For the lazy rotator :)

		// Allow short tags <? (instead of <?php) for more flexible view scripts.
		// 'short_open_tag' => '1'
	),
	//'libraries_profile' => 'bleeding_edge' // What profile of libraries should be used.
);

//$config['unit.test'] = $config['sifo.local'];
$config['unit.test']['instance'] = 'simpleblog';
