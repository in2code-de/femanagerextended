<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

/**
 * Static TypoScript
 */
ExtensionManagementUtility::addStaticFile(
    'femanagerextended',
    'Configuration/TypoScript/Main',
    'Main Settings for extended femanager'
);
