<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * Add page TSConfig for the two new fields
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:femanagerextended/Configuration/PageTS/addFields.tsconfig"');

/**
 * Add custom validators
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Femanager\Domain\Validator\ServersideValidator::class] = [
    'className' => \In2code\Femanagerextended\Domain\Validator\CustomServersideValidator::class,
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Femanager\Domain\Validator\ClientsideValidator::class] = [
    'className' => \In2code\Femanagerextended\Domain\Validator\CustomClientsideValidator::class,
];

/**
 * Override femanager User model with own
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Femanager\Domain\Model\User::class] = [
    'className' => \In2code\Femanagerextended\Domain\Model\User::class,
];
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
    ->registerImplementation(
        \In2code\Femanager\Domain\Model\User::class,
        \In2code\Femanagerextended\Domain\Model\User::class
    );
