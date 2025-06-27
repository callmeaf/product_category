<?php

namespace Callmeaf\ProductCategory\App\Http\Resources\Admin\V1;

use Callmeaf\Base\App\Enums\DateTimeFormat;
use Callmeaf\ProductCategory\App\Models\ProductCategory;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;
use Callmeaf\Propertiable\App\Repo\Contracts\PropertiableRepoInterface;
use Callmeaf\Property\App\Repo\Contracts\PropertyRepoInterface;
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
        /**
         * @var PropertiableRepoInterface $propertyRepo
         */
        $propRepo = app(PropertiableRepoInterface::class);
        return [
            'slug' => $this->slug,
            'parent_id' => $this->parent_id,
            'status' => $this->status,
            'status_text' => $this->statusText,
            'type' => $this->type,
            'type_text' => $this->typeText,
            'content' => $this->content,
            'created_at' => $this->created_at,
            'created_at_text' => $this->createdAtText(DateTimeFormat::DATE_TIME),
            'updated_at' => $this->updated_at,
            'updated_at_text' => $this->updatedAtText(DateTimeFormat::DATE_TIME),
            'deleted_at' => $this->deleted_at,
            'deleted_at_text' => $this->deletedAtText(),
            'parent' => $productCategoryRepo->toResource($this->whenLoaded('parent')),
            'children' => $productCategoryRepo->toResourceCollection($this->whenLoaded('children')),
            'props' => $propRepo->toResourceCollection($this->whenLoaded('props'))
        ];
    }
}
