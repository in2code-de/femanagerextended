<?php
namespace In2code\Femanagerextended\Xclass\Extbase\Mvc\Controller;

class Argument extends \TYPO3\CMS\Extbase\Mvc\Controller\Argument
{
    /**
     * Set data type for femanager workaround.
     * Workaround to avoid php7 warnings of wrong type hint.
     *
     * @param $dataType
     * @return $this
     */
    public function setDataType($dataType) {
        $this->dataType = $dataType;
        return $this;
    }
}