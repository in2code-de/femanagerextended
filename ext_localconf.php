<?php

declare(strict_types=1);

use In2code\Femanager\Domain\Validator\ServersideValidator;
use In2code\Femanagerextended\Domain\Validator\CustomServersideValidator;
use In2code\Femanager\Domain\Validator\ClientsideValidator;
use In2code\Femanagerextended\Domain\Validator\CustomClientsideValidator;
use In2code\Femanager\Domain\Model\User as FemanagerUser;
use In2code\Femanagerextended\Domain\Model\User;

defined('TYPO3') or die();

/**
 * Add custom validators
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][ServersideValidator::class] = [
    'className' => CustomServersideValidator::class,
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][ClientsideValidator::class] = [
    'className' => CustomClientsideValidator::class,
];

/**
 * Override femanager User model with own
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][FemanagerUser::class] = [
    'className' => User::class,
];

// Add custom controller via XCLASS
//$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Femanager\Controller\NewController::class] = [
//    'className' => \In2code\Femanagerextended\Controller\NewController::class,
//];
