<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\Domain\Model;

use In2code\Femanager\Domain\Model\User as FemanagerUser;
use TYPO3\CMS\Extbase\Domain\Model\Category;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class User extends FemanagerUser
{
    protected string $twitterId = '';

    protected string $skypeId = '';

    /**
     * @var ObjectStorage<Category>
     */
    protected ObjectStorage $userCategories;

    public function __construct(string $username = '', string $password = '')
    {
        parent::__construct($username, $password);
        $this->initializeObject();
    }

    /**
     * Extbase does not call the constructor when objects are reconstituted from the database
     */
    public function initializeObject(): void
    {
        $this->userCategories = new ObjectStorage();
    }

    public function getTwitterId(): string
    {
        return $this->twitterId;
    }

    public function setTwitterId(string $twitterId): void
    {
        $this->twitterId = $twitterId;
    }

    public function getSkypeId(): string
    {
        return $this->skypeId;
    }

    public function setSkypeId(string $skypeId): void
    {
        $this->skypeId = $skypeId;
    }

    /**
     * @return ObjectStorage<Category>
     */
    public function getUserCategories(): ObjectStorage
    {
        return $this->userCategories;
    }

    /**
     * @param ObjectStorage<Category> $userCategories
     */
    public function setUserCategories(ObjectStorage $userCategories): void
    {
        $this->userCategories = $userCategories;
    }

    public function addUserCategory(Category $category): void
    {
        $this->userCategories->attach($category);
    }

    public function removeUserCategory(Category $category): void
    {
        $this->userCategories->detach($category);
    }
}
