<?php
namespace In2\Femanagerextended\Controller;

class NewController extends \In2\Femanager\Controller\NewController {

	/**
	 * action create
	 *
	 * @param \In2\Femanagerextended\Domain\Model\User $user
	 * @validate $user In2\Femanager\Domain\Validator\ServersideValidator
	 * @validate $user In2\Femanager\Domain\Validator\PasswordValidator
	 * @return void
	 */
	public function createAction(\In2\Femanagerextended\Domain\Model\User $user) {
		parent::createAction($user);
	}
}
?>