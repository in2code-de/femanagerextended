<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\Domain\Model;

use In2code\Femanager\Domain\Model\User as FemanageUser;

class User extends FemanageUser
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
}
