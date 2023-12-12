<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\Domain\Model;

use In2code\Femanager\Domain\Model\User as FemanagerUser;

class User extends FemanagerUser
{

    /**
     * twitterId
     *
     * @var string
     */
    protected string $twitterId;

    /**
     * skypeId
     *
     * @var string
     */
    protected string $skypeId;

    /**
     * @var ObjectStorage<Category>
     */
    protected ObjectStorage $userCategories;

    public function __construct($username = '', $password = '')
    {
        parent::__construct($username, $password);
        $this->userCategories = new ObjectStorage();
    }


    /**
     * Returns the twitterId
     *
     * @return string $twitterId
     */
    public function getTwitterId(): string
    {
        return $this->twitterId;
    }

    /**
     * Sets the twitterId
     *
     * @param string $twitterId
     * @return void
     */
    public function setTwitterId(string $twitterId): void
    {
        $this->twitterId = $twitterId;
    }

    /**
     * Returns the skypeId
     *
     * @return string $skypeId
     */
    public function getSkypeId(): string
    {
        return $this->skypeId;
    }

    /**
     * Sets the skypeId
     *
     * @param string $skypeId
     * @return void
     */
    public function setSkypeId(string $skypeId): void
    {
        $this->skypeId = $skypeId;
    }

    /**
     * @return ObjectStorage
     */
    public function getUserCategories(): ObjectStorage
    {
        return $this->userCategories;
    }

    /**
     * @param ObjectStorage $userCategories
     */
    public function setUserCategories(ObjectStorage $userCategories): void
    {
        $this->userCategories = $userCategories;
    }

    /**
     * @param Category $category
     * @return void
     */
    public function addUserCategory(Category $category)
    {
        $this->userCategories->attach($category);
    }

    /**
     * @param Category $category
     * @return void
     */
    public function removeUserCategory(Category $category)
    {
        $this->userCategories->detach($category);
    }
}
