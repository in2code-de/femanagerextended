<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\ViewHelpers\Form;

use In2code\Femanagerextended\Domain\Repository\CategoryRepository;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetCategoriesViewHelper extends AbstractViewHelper
{
    public function __construct(private readonly CategoryRepository $categoryRepository)
    {
    }

    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('rootCategory', 'string', 'uid of root category', true);
    }

    public function render(): array
    {
        $categories = [];
        $rootCategory = (int)$this->arguments['rootCategory'];
        if ($rootCategory > 0) {
            $categories = $this->categoryRepository->findBy(['parent' => $rootCategory])->toArray();
        }
        return $categories;
    }
}
