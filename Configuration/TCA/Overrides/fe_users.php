<?php
/**
 * Add new fields to fe_users table
 */
    $GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
    $tmpFeUsersColumns = [
        'twitter_id' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
                'tx_femanagerextended_domain_model_user.twitter_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'skype_id' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
                'tx_femanagerextended_domain_model_user.skype_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'tx_extbase_type' => [
            'config' => [
                'type' => 'input',
                'default' => '0',
            ],
        ],
        'example_model' => [
            'label' => 'Example model',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'None',
                        0
                    ]
                ],
                'foreign_table' => 'tx_femanagerextended_domain_model_examplemodel',
                'default' => 0
            ]
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmpFeUsersColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'twitter_id, skype_id, example_model');
