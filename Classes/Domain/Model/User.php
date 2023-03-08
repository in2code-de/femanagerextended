<?php
namespace In2code\Femanagerextended\Domain\Model;

class User extends \In2code\Femanager\Domain\Model\User
{

    /**
     * twitterId
     *
     * @var string
     */
    protected $twitterId;

    /**
     * skypeId
     *
     * @var string
     */
    protected $skypeId;

    /** @var ExampleModel|null $exampleModel */
    protected ?ExampleModel $exampleModel = null;

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
    public function setTwitterId($twitterId): void
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
    public function setSkypeId($skypeId): void
    {
        $this->skypeId = $skypeId;
    }

    /**
     * @return ExampleModel|null
     */
    public function getExampleModel(): ?ExampleModel
    {
        return $this->exampleModel;
    }

    /**
     * @param ExampleModel|null $exampleModel
     */
    public function setExampleModel(?ExampleModel $exampleModel): void
    {
        $this->exampleModel = $exampleModel;
    }
}
