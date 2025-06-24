<?php

namespace Callmeaf\ProductCategory\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Traits\Model\HasDate;
use Callmeaf\Base\App\Traits\Model\HasParent;
use Callmeaf\Base\App\Traits\Model\HasSlug;
use Callmeaf\Base\App\Traits\Model\HasStatus;
use Callmeaf\Base\App\Traits\Model\HasType;
use Callmeaf\Product\App\Repo\Contracts\ProductRepoInterface;
use Callmeaf\ProductToCategory\App\Repo\Contracts\ProductToCategoryRepoInterface;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends BaseModel
{
     use SoftDeletes;
     use HasStatus,HasType,HasParent,HasDate,HasSlug;

    protected $primaryKey = 'slug';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'slug',
        'parent_id',
        'status',
        'type',
        'title',
        'content',
    ];

    public static function configKey(): string
    {
        return 'callmeaf-product-category';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }

    public function products(): BelongsToMany
    {
        /**
         * @var ProductRepoInterface $productRepo
         */
        $productRepo = app(ProductRepoInterface::class);
        /**
         * @var ProductToCategoryRepoInterface $productToCategoryRepo
         */
        $productToCategoryRepo = app(ProductToCategoryRepoInterface::class);
        return $this->belongsToMany($productRepo->getModel()::class,$productToCategoryRepo->getTable(),'category_slug','product_slug')->using($productToCategoryRepo->getModel()::class);
    }

    public static function sluggableColumn(): string
    {
        return 'title';
    }
}
