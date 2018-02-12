<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Extbase\\Mvc\\Controller\\Argument'] = array(
        'className' => 'In2code\\Femanagerextended\\Xclass\\Extbase\\Mvc\\Controller\\Argument'
    );
});
