<?php
namespace In2\Femanagerextended\Controller;

class EditController extends \In2\Femanager\Controller\EditController {

	/**
	 * action update
	 *
	 * @param \In2\Femanagerextended\Domain\Model\User $user
	 * @validate $user In2\Femanager\Domain\Validator\ServersideValidator
	 * @validate $user In2\Femanager\Domain\Validator\PasswordValidator
	 * @return void
	 */
	public function updateAction(\In2\Femanagerextended\Domain\Model\User $user) {
		parent::updateAction($user);
	}
}
?>