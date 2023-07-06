<?php

declare(strict_types=1);
namespace In2code\Femanagerextended\ViewHelpers\Form;

use In2code\Femanagerextended\Domain\Repository\CategoryRepository;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetCategoriesViewHelper extends AbstractViewHelper
{
    protected CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('rootCategory', 'string', 'uid of root category', true);
    }

    public function render(): array
    {
        if ((int)$this->arguments['rootCategory'] > 0) {
            return $this->categoryRepository->findByParent($this->arguments['rootCategory'])->toArray();
        } else {
            return [];
        }
    }
}