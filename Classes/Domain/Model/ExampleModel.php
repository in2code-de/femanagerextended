<?php

namespace In2code\Femanagerextended\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ExampleModel extends AbstractEntity
{
    protected $title = '';

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
