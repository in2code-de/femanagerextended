<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('fe_users');
$TCA['fe_users']['ctrl']['type'] = 'tx_extbase_type';
$tmpFeUsersColumns = array(
	'twitter_id' => array(
		'exclude' => 1,
		'label' =>
			'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.twitter_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'skype_id' => array(
		'exclude' => 1,
		'label' =>
			'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:tx_femanagerextended_domain_model_user.skype_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'tx_extbase_type' => array(
		'config' => array(
			'type' => 'input',
			'default' => '0'
		)
	)
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmpFeUsersColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'twitter_id, skype_id');