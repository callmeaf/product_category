<?php

namespace Callmeaf\ProductCategory\App\Http\Resources\Api\V1;

use Callmeaf\ProductCategory\App\Models\ProductCategory;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read ProductCategory $resource
 */
class ProductCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /**
         * @var ProductCategoryRepoInterface $productCategoryRepo
         */
        $productCategoryRepo = app(ProductCategoryRepoInterface::class);
        return [
            'slug' => $this->slug,
            'parent_id' => $this->parent_id,
            'status' => $this->status,
            'status_text' => $this->statusText,
            'type' => $this->type,
            'type_text' => $this->typeText,
            'content' => $this->content,
            'parent' => $productCategoryRepo->toResource($this->whenLoaded('parent')),
            'children' => $productCategoryRepo->toResourceCollection($this->whenLoaded('children'))
        ];
    }
}
