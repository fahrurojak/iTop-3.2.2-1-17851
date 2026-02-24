<?php

SetupWebPage::AddModule(
	__FILE__,
	'userrequest-test-field/1.0.0',
	array(
		'label' => 'UserRequest Test Field',
		'category' => 'business',
		'dependencies' => array(
			'itop-request-mgmt-itil/3.2.1',
		),
		'mandatory' => false,
		'visible' => true,
		'datamodel' => array(
			'main.userrequest-test-field.php',
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
	)
);
