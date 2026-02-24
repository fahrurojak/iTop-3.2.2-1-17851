<?php

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'userrequest-test-field/1.0.1',
	array(
		// Identification
		'label' => 'UserRequest Test Field',
		'category' => 'business',

		// Setup
		'dependencies' => array(
			'itop-request-mgmt-itil/3.2.1',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		'datamodel' => array(
			'main.userrequest-test-field.php',
		),
		'webservice' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),

		// Documentation
		'doc.manual_setup' => '',
		'doc.more_information' => '',

		// Default settings
		'settings' => array(
		),
	)
);
