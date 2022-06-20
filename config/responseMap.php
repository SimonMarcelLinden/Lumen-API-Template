<?php

return [
	/*
	|--------------------------------------------------------------------------
	| 09 - SETTINGS
	|--------------------------------------------------------------------------
	*/
	// SUCCESS
	91000 => [
		'status' => 200,
		'detail' => 'request successful',
		'localized' => [
			'de' => [
				'title' => 'Erfolg',
				'message' => 'Die Anfrage war erfolgreich.'
			],
			'en' => [
				'title' => 'Success',
				'message' => 'Request was successful.'
			]
		]
	],
	91010 => [
		'status' => 200,
		'detail' => 'settings found',
		'localized' => [
			'de' => [
				'title' => 'Found',
				'message' => 'The settings were found.'
			],
			'de' => [
				'title' => 'Gefunden',
				'message' => 'Die Einstellung wurden gefunden.'
			]
		]
	],
	91020 => [
		'status' => 200,
		'detail' => 'setting updated',
		'localized' => [
			'de' => [
				'title' => 'Saved',
				'message' => 'The setting was updated successfully.'
			],
			'de' => [
				'title' => 'Gepeichert',
				'message' => 'Die Einstellung wurde erfolgreich aktualisiert.'
			]
		]
	],
	91030 => [
		'status' => 200,
		'detail' => 'setting saved',
		'localized' => [
			'de' => [
				'title' => 'Saved',
				'message' => 'The setting was saved successfully.'
			],
			'de' => [
				'title' => 'Gepeichert',
				'message' => 'Die Einstellung wurde erfolgreich gespeichert.'
			]
		]
	],

	// FAILURE
	92000 => [
		'status' => 400,
		'detail' => 'request failure',
		'localized' => [
			'de' => [
				'title' => 'Erfolg',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			],
			'en' => [
				'title' => 'Success',
				'message' => 'Request has failed.'
			]
		]
	],
	92010 => [
		'status' => 404,
		'detail' => 'setting not found',
		'localized' => [
			'en' => [
				'title' => 'Setting does not exist.',
				'message' => 'The setting you specified does not exist.'
			],
			'de' => [
				'title' => 'Einstellung existiert nicht.',
				'message' => 'Die von Ihnen angegebene Einstellung existiert nicht.'
			]
		]
	],
	92011 => [
		'status' => 404,
		'detail' => 'Setting exists',
		'localized' => [
			'en' => [
				'title' => 'Setting already exists.',
				'message' => 'The setting you specified already exist.'
			],
			'de' => [
				'title' => 'Einstellung existiert bereits.',
				'message' => 'Die von Ihnen angegebene Einstellung existiert bereits.'
			]
		]
	],
	92020 => [
		'status' => 400,
		'detail' => 'setting can\'t update',
		'localized' => [
			'en' => [
				'title' => 'Setting can\'t update',
				'message' => 'The \'id\' field is required when title is not present.'
			],
			'de' => [
				'title' => 'Einstellung kann nicht aktualisiert werden.',
				'message' => 'Das ID-Feld ist erforderlich, wenn der Titel nicht vorhanden ist.'
			]
		]
	],
	92021 => [
		'status' => 400,
		'detail' => 'setting can\'t update',
		'localized' => [
			'en' => [
				'title' => 'Setting can\'t update',
				'message' => 'The \'value\' field is required.'
			],
			'de' => [
				'title' => 'Einstellung kann nicht aktualisiert werden.',
				'message' => 'Das Attribute \'value\' ist erforderlich.'
			]
		]
	],
	92022 => [
		'status' => 400,
		'detail' => 'setting can\'t set',
		'localized' => [
			'en' => [
				'title' => 'Setting can\'t set',
				'message' => 'The attribute \'title\' is required for the setting.'
			],
			'de' => [
				'title' => 'Einstellung kann nicht gespeichert werden.',
				'message' => 'Das Attribute \'title\' ist für die Einstellung erforderlich.'
			]
		]
	],
	/** Options **/
	92050 => [
		'status' => 400,
		'detail' => 'option can\'t set',
		'localized' => [
			'en' => [
				'title' => 'Option can\'t set',
				'message' => 'The attribute \'value\' is required for the option field.'
			],
			'de' => [
				'title' => 'Einstellung kann nicht gespeichert werden.',
				'message' => 'Das Attribute \'value\' ist für das Optionsfeld erforderlich.'
			]
		]
	],
	92051 => [
		'status' => 400,
		'detail' => 'option can\'t set',
		'localized' => [
			'en' => [
				'title' => 'Option can\'t set',
				'message' => 'The attribute \'value\' is required for the option field.'
			],
			'de' => [
				'title' => 'Einstellung kann nicht gespeichert werden.',
				'message' => 'Das Attribute \'value\' ist für das Optionsfeld erforderlich.'
			]
		]
	],

	/*
    |--------------------------------------------------------------------------
    | 10 - GENERAL
    |--------------------------------------------------------------------------
    */
	// SUCCESS
	101000 => [
		'status' => 200,
		'detail' => 'request successful',
		'localized' => [
			'de' => [
				'title' => 'Erfolg',
				'message' => 'Die Anfrage war erfolgreich.'
			]
		]
	],
	// FAILURE
	102000 => [
		'status' => 400,
		'detail' => 'request failed',
		'localized' => [
			'en' => [
				'title' => 'Error',
				'message' => 'The request failed.'
			],
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			]
		]
	],
	102005 => [
		'status' => 404,
		'detail' => 'not found',
		'localized' => [
			'en' => [
				'title' => 'Error',
				'message' => 'The server can not find the requested resource.'
			],
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die angeforderte Ressource wurde nicht gefunden.'
			]
		]
	],
	102010 => [
		'status' => 501,
		'detail' => 'missing implementation',
		'localized' => [
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			]
		]
	],
	102020 => [
		'status' => 401,
		'detail' => 'token missing',
		'localized' => [
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			]
		]
	],
	102030 => [
		'status' => 401,
		'detail' => 'token expired',
		'localized' => [
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			]
		]
	],
	102040 => [
		'status' => 401,
		'detail' => 'token invalid',
		'localized' => [
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			]
		]
	],
	102050 => [
		'status' => 401,
		'detail' => 'permission denied',
		'localized' => [
			'de' => [
				'title' => 'Fehler',
				'message' => 'Die Anfrage ist fehlgeschlagen.'
			]
		]
	],

	/*
    |--------------------------------------------------------------------------
    | 11 - AUTH
    |--------------------------------------------------------------------------
    */
	// SUCCESS
	111000 => [
		'status' => 200,
		'detail' => 'login successful',
	],
	// FAILURE
	112000 => [
		'status' => 400,
		'detail' => 'wrong credentials',
		'localized' => [
			'en' => [
				'title' => 'Login Failed',
				'message' => 'Please check your email and password.'
			],
			'de' => [
				'title' => 'Login Fehlgeschlagen',
				'message' => 'Bitte überprüfe E-Mail und Passwort.'
			]
		]
	],

	/*
    |--------------------------------------------------------------------------
    | 12 - User
    |--------------------------------------------------------------------------
    */
	// SUCCESS
	121000 => [
		'status' => 201,
		'detail' => 'user created',
		'localized' => [
			'en' => [
				'title' => 'Created',
				'message' => 'The new user was created successfully. '
			],
			'de' => [
				'title' => 'Erstellt',
				'message' => 'Der neue User wurde erfolgreich erstellt.'
			]
		]
	],
	121010 => [
		'status' => 200,
		'detail' => 'user found',
	],
	121020 => [
		'status' => 200,
		'detail' => 'user updated',
		'localized' => [
			'en' => [
				'title' => 'Saved',
				'message' => 'The user was updated successfully.'
			],
			'de' => [
				'title' => 'Gepeichert',
				'message' => 'Der User wurde erfolgreich aktualisiert.'
			]
		]
	],
	121030 => [
		'status' => 200,
		'detail' => 'user deleted',
		'localized' => [
			'en' => [
				'title' => 'Deleted',
				'message' => 'The user has been removed.'
			],
			'de' => [
				'title' => 'Gelöscht',
				'message' => 'Der User wurde entfernt.'
			]
		]
	],
	121040 => [
		'status' => 200,
		'detail' => 'user restored',
		'localized' => [
			'en' => [
				'title' => 'Restored',
				'message' => 'The user has been restored.'
			],
			'de' => [
				'title' => 'Wiederhergestellt',
				'message' => 'Der User wurde wiederhergestellt.'
			]
		]
	],
	// FAILURE
	122000 => [
		'status' => 400,
		'detail' => 'missing form data',
		'localized' => [
			'en' => [
				'title' => 'Input incorrect',
				'message' => 'Please check your entries.'
			],
			'de' => [
				'title' => 'Eingabe Fehlerhaft',
				'message' => 'Bitte überprüfen Sie Ihre Eingaben.'
			]
		]
	],
	122010 => [
		'status' => 404,
		'detail' => 'user not found',
		'localized' => [
			'en' => [
				'title' => 'User does not exist',
				'message' => 'The user you specified does not exist.'
			],
			'de' => [
				'title' => 'User existiert nicht',
				'message' => 'Der von Ihnen angegebene User existiert nicht.'
			]
		]
	],
	122020 => [
		'status' => 409,
		'detail' => 'email already in use',
		'localized' => [
			'en' => [
				'title' => 'Already Registered',
				'message' => 'The email address is already in use.'
			],
			'de' => [
				'title' => 'Bereits Registiert',
				'message' => 'Die E-Mailadresse ist bereits in Verwendung.'
			]
		]
	],

	/*
    |--------------------------------------------------------------------------
    | 13 - ROLE
    |--------------------------------------------------------------------------
    */
	// Todo:
	// SUCCESS
	131000 => [
		'status' => 201,
		'detail' => 'role created',
		'localized' => [
			'de' => [
				'title' => 'Erstellt',
				'message' => 'Die neue Rolle wurde erfolgreich erstellt.'
			]
		]
	],
	131010 => [
		'status' => 200,
		'detail' => 'role found',
	],
	131020 => [
		'status' => 200,
		'detail' => 'role updated',
		'localized' => [
			'de' => [
				'title' => 'Gepeichert',
				'message' => 'Die Rolle wurde erfolgreich aktualisiert.'
			]
		]
	],
	131030 => [
		'status' => 200,
		'detail' => 'role deleted.',
		'localized' => [
			'de' => [
				'title' => 'Gelöscht',
				'message' => 'Die Rolle wurde entfernt.'
			]
		]
	],
	131040 => [
		'status' => 200,
		'detail' => 'role restored',
		'localized' => [
			'en' => [
				'title' => 'Restored',
				'message' => 'The role has been restored.'
			],
			'de' => [
				'title' => 'Wiederhergestellt',
				'message' => 'Die Rolle wurde wiederhergestellt.'
			]
		]
	],
	// FAILURE
	132000 => [
		'status' => 400,
		'detail' => 'missing form data',
		'localized' => [
			'en' => [
				'title' => 'Input incorrect',
				'message' => 'Please check your entries.'
			],
			'de' => [
				'title' => 'Eingabe Fehlerhaft',
				'message' => 'Bitte überprüfen Sie Ihre Eingaben.'
			]
		]
	],
	132010 => [
		'status' => 404,
		'detail' => 'role not found',
		'localized' => [
			'en' => [
				'title' => 'Role does not exist',
				'message' => 'The permission you specified does not exist.'
			],
			'de' => [
				'title' => 'Rolle existiert nicht',
				'message' => 'Die von Ihnen angegebene Permission existiert nicht.'
			]
		]
	],
	132020 => [
		'status' => 400,
		'detail' => 'permission already exists',
		'localized' => [
			'en' => [
				'title' => 'Permission already exists',
				'message' => 'The role already has this permission.'
			],
			'de' => [
				'title' => 'Permission existiert bereits',
				'message' => 'Die Rolle besitzt diese Permission bereits.'
			]
		]
	],
	132030 => [
		'status' => 400,
		'detail' => 'cant delete role',
		'localized' => [
			'en' => [
				'title' => 'Role could not be deleted',
				'message' => 'A role that is assigned to a user cannot be deleted.'
			],
			'de' => [
				'title' => 'Rolle konnte nicht gelöscht werden',
				'message' => 'Eine Rolle, welche einem User zugewiesen ist, kann nicht gelöscht werden.'
			]
		]
	],

	/*
    |--------------------------------------------------------------------------
    | 20 - Newsletter
    |--------------------------------------------------------------------------
    */
	// SUCCESS
	201000 => [
		'status' => 200,
		'detail' => 'email send',
		'localized' => [
			'en' => [
				'title' => 'Email sent',
				'message' => 'Email has been sent.'
			],
			'de' => [
				'title' => 'Email gesendet',
				'message' => 'Email wurde versendet.'
			]
		]
	],
	// FAILURE
	202000 => [
		'status' => 501,
		'detail' => 'unknown error',
		'localized' => [
			'en' => [
				'title' => 'Unknown error',
				'message' => 'Unknown error in the e-mail delivery.'
			],
			'de' => [
				'title' => 'Unbekannter Fehler',
				'message' => 'Unbekannter Fehler im beim Email-Versand.'
			]
		]
	],
	202010 => [
		'status' => 409,
		'detail' => 'email already in use',
		'localized' => [
			'en' => [
				'title' => 'Already Registered',
				'message' => 'The email address is already in use.'
			],
			'de' => [
				'title' => 'Bereits Registiert',
				'message' => 'Die E-Mailadresse ist bereits in Verwendung.'
			]
		]
	]
];
