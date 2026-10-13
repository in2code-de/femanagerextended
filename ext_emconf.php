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
    'version' => '14.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.4.99',
            'femanager' => '14.0.0-14.99.99',
            'php' => '8.2.0-8.4.99',
        ],
    ],
];
