<?php
namespace In2\Femanagerextended\Domain\Model;

class User extends \In2\Femanager\Domain\Model\User {

	/**
	 * twitterId
	 *
	 * @var \string
	 */
	protected $twitterId;

	/**
	 * skypeId
	 *
	 * @var \string
	 */
	protected $skypeId;

	/**
	 * Returns the twitterId
	 *
	 * @return \string $twitterId
	 */
	public function getTwitterId() {
		return $this->twitterId;
	}

	/**
	 * Sets the twitterId
	 *
	 * @param \string $twitterId
	 * @return void
	 */
	public function setTwitterId($twitterId) {
		$this->twitterId = $twitterId;
	}

	/**
	 * Returns the skypeId
	 *
	 * @return \string $skypeId
	 */
	public function getSkypeId() {
		return $this->skypeId;
	}

	/**
	 * Sets the skypeId
	 *
	 * @param \string $skypeId
	 * @return void
	 */
	public function setSkypeId($skypeId) {
		$this->skypeId = $skypeId;
	}

	/**
	 * @param string $username
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

}
?>