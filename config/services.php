<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'doelivros\User',
		'key' => '',
		'secret' => '',
	],

    'github' => [
        'client_id' => '43a1fb6879376b8b8995',
        'client_secret' => 'e567a1e591037ebe3d6695b9861888bc0c8237a3',
        'redirect' => 'http://localhost:8000/account/github',
    ],

    'facebook' => [
        'client_id' => '1404325353226450',
        'client_secret' => '90108f36ef008006f2af960ef1a7f940',
        'redirect' => 'http://localhost:8000/account/facebook',
    ],

    'twitter' => [
        'client_id' => 'x5nEi9qz9iSrY0K1pgWlCGnpU',
        'client_secret' => 'LAPrLAEigarh9US45A2zDNL8MVkoiAy8J2Cu3aXpefdTapLmej',
        'redirect' => 'http://doelivros.org/account/twitter',
    ],

];
