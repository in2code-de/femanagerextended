<?php
declare(strict_types=1);

use In2code\Femanagerextended\Domain\Model\Category;
use In2code\Femanagerextended\Domain\Model\User;

return [
    User::class => [
        'tableName' => 'fe_users',
        'recordType' => 0,
    ],
    Category::class => [
        'tableName' => 'sys_category',
    ],
];
