<?php

use Callmeaf\ProductCategory\App\Enums\ProductCategoryStatus;
use Callmeaf\ProductCategory\App\Enums\ProductCategoryType;

return [
    ProductCategoryStatus::class => [
        ProductCategoryStatus::ACTIVE->name => 'Active',
        ProductCategoryStatus::INACTIVE->name => 'InActive',
        ProductCategoryStatus::PENDING->name => 'Pending',
    ],
    ProductCategoryType::class => [
        ProductCategoryType::PRODUCT_CATEGORY->name => 'Product Category',
        ProductCategoryType::PACKAGE_CATEGORY->name => 'Package Category'
    ],
];
