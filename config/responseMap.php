<?php

return [


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
    | 12 - Customer
    |--------------------------------------------------------------------------
    */

    // SUCCESS
    121000 => [
        'status' => 201,
        'detail' => 'customer created',
        'localized' => [
            'en' => [
                'title' => 'Created',
                'message' => 'The new customer was created successfully. '
            ],
            'de' => [
                'title' => 'Erstellt',
                'message' => 'Der neue Customer wurde erfolgreich erstellt.'
            ]
        ]
    ],
    121010 => [
        'status' => 200,
        'detail' => 'customer found',
    ],
    121020 => [
        'status' => 200,
        'detail' => 'customer updated',
        'localized' => [
            'en' => [
                'title' => 'Saved',
                'message' => 'The customer was updated successfully.'
            ],
            'de' => [
                'title' => 'Gepeichert',
                'message' => 'Der Customer wurde erfolgreich aktualisiert.'
            ]
        ]
    ],
    121030 => [
        'status' => 200,
        'detail' => 'customer deleted',
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
        'detail' => 'customer restored',
        'localized' => [
            'en' => [
                'title' => 'Restored',
                 'message' => 'The customer has been restored.'
            ],
            'de' => [
                'title' => 'Wiederhergestellt',
                'message' => 'Der Customer wurde wiederhergestellt.'
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
        'detail' => 'customer not found',
        'localized' => [
            'en' => [
                'title' => 'Customer does not exist',
                'message' => 'The customer you specified does not exist.'
            ],
            'de' => [
                'title' => 'Customer existiert nicht',
                'message' => 'Der von Ihnen angegebene Customer existiert nicht.'
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
