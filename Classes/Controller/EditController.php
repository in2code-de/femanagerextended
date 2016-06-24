<?php
namespace In2code\Femanagerextended\Controller;

use In2code\Femanager\Controller\EditController as EditControllerFemanager;
use In2code\Femanagerextended\Domain\Model\User;

/**
 * Class EditController
 *
 * @package In2code\Femanagerextended\Controller
 */
class EditController extends EditControllerFemanager
{

    /**
     * action update
     *
     * @param User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function updateAction(User $user)
    {
        parent::updateAction($user);
    }
}
