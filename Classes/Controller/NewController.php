<?php

namespace In2code\Femanagerextended\Controller;

use In2code\Femanager\Domain\Model\User;
use TYPO3\CMS\Core\Crypto\PasswordHashing\InvalidPasswordHashException;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;

class NewController extends \In2code\Femanager\Controller\NewController {
    /**
     * action create
     */
    public function createAction(User $user, string $captcha = null): \Psr\Http\Message\ResponseInterface
    {
        return parent::createAction($user);
    }
}
