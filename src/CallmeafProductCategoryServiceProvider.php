<?php

namespace Callmeaf\ProductCategory;

use Callmeaf\Base\CallmeafServiceProvider;
use Callmeaf\Base\Contracts\ServiceProvider\HasConfig;
use Callmeaf\Base\Contracts\ServiceProvider\HasEvent;
use Callmeaf\Base\Contracts\ServiceProvider\HasLang;
use Callmeaf\Base\Contracts\ServiceProvider\HasMigration;
use Callmeaf\Base\Contracts\ServiceProvider\HasRepo;
use Callmeaf\Base\Contracts\ServiceProvider\HasRoute;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;

class CallmeafProductCategoryServiceProvider extends CallmeafServiceProvider implements HasRepo, HasEvent, HasRoute, HasMigration, HasConfig, HasLang
{
    protected function serviceKey(): string
    {
        return 'product-category';
    }

    public function repo(): string
    {
        return ProductCategoryRepoInterface::class;
    }
}
