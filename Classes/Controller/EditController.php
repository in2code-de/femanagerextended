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
     * Initialize update action for setting the right custom data type for the user.
     */
    public function initializeUpdateAction() {
        if ($this->arguments->hasArgument('user')) {
            // Workaround to avoid php7 warnings of wrong type hint.
            /** @var \In2code\Femanagerextended\Xclass\Extbase\Mvc\Controller\Argument $user */
            $user = $this->arguments['user'];
            $user->setDataType(\In2code\Femanagerextended\Domain\Model\User::class);
        }
    }
    
    /**
     * action update
     *
     * @param User $user
     * @validate $user In2code\Femanager\Domain\Validator\ServersideValidator
     * @validate $user In2code\Femanager\Domain\Validator\PasswordValidator
     * @return void
     */
    public function updateAction(\In2code\Femanager\Domain\Model\User $user)
    {
        parent::updateAction($user);
    }
}
