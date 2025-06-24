<?php

namespace Callmeaf\ProductCategory\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\ProductCategory\App\Models\ProductCategory;
use Callmeaf\ProductCategory\App\Http\Resources\Api\V1\ProductCategoryCollection;
use Callmeaf\ProductCategory\App\Http\Resources\Api\V1\ProductCategoryResource;

/**
 * @extends BaseRepoInterface<ProductCategory,ProductCategoryResource,ProductCategoryCollection>
 */
interface ProductCategoryRepoInterface extends BaseRepoInterface
{

}
