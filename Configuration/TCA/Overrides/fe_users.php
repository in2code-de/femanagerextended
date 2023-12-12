<?php
/**
 * Add new fields to fe_users table
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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
        'user_categories' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
                'tx_femanagerextended_domain_model_user.user_categories',
            'config' => [
                'type' => 'category',
                'relationship' => 'oneToMany',
                'treeConfig' => [
                    'startingPoints' => 1,
                ],
                'minitems' => 0,
                'maxitems' => 99,
            ]
        ],
        'tx_extbase_type' => [
            'config' => [
                'type' => 'input',
                'default' => '0',
            ],
        ],
    ];

    ExtensionManagementUtility::addTCAcolumns('fe_users', $tmpFeUsersColumns);
    ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'twitter_id, skype_id, user_categories');
