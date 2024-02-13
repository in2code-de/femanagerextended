<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "femanagerextended"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'femanagerextended',
    'description' => 'Extend fe_users and femanager with a new field and a new validation',
    'category' => 'example',
    'author' => 'Alex Kellner',
    'author_email' => 'alexander.kellner@in2code.de',
    'author_company' => 'in2code GmbH',
    'state' => 'stable',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'femanager' => '8.0.0-',
        ],
    ],
];
