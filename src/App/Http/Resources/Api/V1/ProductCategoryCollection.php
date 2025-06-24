<?php

namespace Callmeaf\ProductCategory\App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<ProductCategoryResource>
 */
class ProductCategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, ProductCategoryResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
