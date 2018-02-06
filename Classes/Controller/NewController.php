<?php
namespace In2code\Femanagerextended\Controller;

use In2code\Femanagerextended\Domain\Model\User;

class NewController extends \In2code\Femanager\Controller\NewController
{

     /**
     * Initialize create action for setting the right custom data type for the user.
     */
    public function initializeCreateAction() {
        if ($this->arguments->hasArgument('user')) {
            // Workaround to avoid php7 warnings of wrong type hint.
            /** @var \In2code\Femanagerextended\Xclass\Extbase\Mvc\Controller\Argument $user */
            $user = $this->arguments['user'];
            $user->setDataType(\In2code\Femanagerextended\Domain\Model\User::class);
        }
    }
    
    /**
     * action create
     *
     * @param User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function createAction(\In2code\Femanager\Domain\Model\User $user)
    {
        parent::createAction($user);
    }
}
