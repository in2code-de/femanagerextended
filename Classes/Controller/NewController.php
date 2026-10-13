<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\Controller;

use In2code\Femanager\Controller\NewController as FemanagerNewController;
use In2code\Femanager\Domain\Model\User;
use In2code\Femanager\Domain\Validator\CaptchaValidator;
use In2code\Femanager\Domain\Validator\PasswordValidator;
use In2code\Femanager\Domain\Validator\ServersideValidator;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Annotation\Validate;

/**
 * Example for an own controller - activate it via XCLASS in ext_localconf.php
 *
 * The validation attributes of the parent action are not inherited and have to be repeated here.
 */
class NewController extends FemanagerNewController
{
    #[Validate(['validator' => ServersideValidator::class, 'param' => 'user'])]
    #[Validate(['validator' => PasswordValidator::class, 'param' => 'user'])]
    #[Validate(['validator' => CaptchaValidator::class, 'param' => 'captcha'])]
    public function createAction(User $user, ?string $captcha = null): ResponseInterface
    {
        return parent::createAction($user, $captcha);
    }
}
