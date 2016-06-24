<?php
namespace In2code\Femanagerextended\Controller;

use In2code\Femanagerextended\Domain\Model\User;

class NewController extends \In2code\Femanager\Controller\NewController
{

    /**
     * action create
     *
     * @param User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function createAction(User $user)
    {
        parent::createAction($user);
    }
}
