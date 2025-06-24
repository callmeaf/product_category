<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\ProductCategory\App\Models\ProductCategory::class,
    'route_key_name' => 'slug',
    'repo' => \Callmeaf\ProductCategory\App\Repo\V1\ProductCategoryRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\ProductCategory\App\Http\Resources\Api\V1\ProductCategoryResource::class,
            'resource_collection' => \Callmeaf\ProductCategory\App\Http\Resources\Api\V1\ProductCategoryCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\ProductCategory\App\Http\Resources\Web\V1\ProductCategoryResource::class,
            'resource_collection' => \Callmeaf\ProductCategory\App\Http\Resources\Web\V1\ProductCategoryCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\ProductCategory\App\Http\Resources\Admin\V1\ProductCategoryResource::class,
            'resource_collection' => \Callmeaf\ProductCategory\App\Http\Resources\Admin\V1\ProductCategoryCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryIndexed::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryCreated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryShowed::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryDeleted::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Api\V1\ProductCategoryTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryIndexed::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryCreated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryShowed::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryDeleted::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Web\V1\ProductCategoryTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryIndexed::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryCreated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryShowed::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryDeleted::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\ProductCategory\App\Events\Admin\V1\ProductCategoryTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryIndexRequest::class,
            'store' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryStoreRequest::class,
            'show' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryShowRequest::class,
            'update' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryUpdateRequest::class,
            'destroy' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryDestroyRequest::class,
            'statusUpdate' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\ProductCategory\App\Http\Requests\Api\V1\ProductCategoryTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryIndexRequest::class,
            'create' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryCreateRequest::class,
            'store' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryStoreRequest::class,
            'show' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryShowRequest::class,
            'edit' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryEditRequest::class,
            'update' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryUpdateRequest::class,
            'destroy' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryDestroyRequest::class,
            'statusUpdate' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\ProductCategory\App\Http\Requests\Web\V1\ProductCategoryTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryIndexRequest::class,
            'store' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryStoreRequest::class,
            'show' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryShowRequest::class,
            'update' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryUpdateRequest::class,
            'destroy' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryDestroyRequest::class,
            'statusUpdate' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\ProductCategory\App\Http\Requests\Admin\V1\ProductCategoryTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'product_category' => \Callmeaf\ProductCategory\App\Http\Controllers\Api\V1\ProductCategoryController::class,
        ],
        RequestType::WEB->value => [
            'product_category' => \Callmeaf\ProductCategory\App\Http\Controllers\Web\V1\ProductCategoryController::class,
        ],
        RequestType::ADMIN->value => [
            'product_category' => \Callmeaf\ProductCategory\App\Http\Controllers\Admin\V1\ProductCategoryController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'product_categories',
            'as' => 'product_categories.',
            'middleware' => [
                'auth:sanctum'
            ],
        ],
        RequestType::WEB->value => [
            'prefix' => 'product_categories',
            'as' => 'product_categories.',
            'middleware' => [
                'route_status:' . \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND
            ],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'product_categories',
            'as' => 'product_categories.',
            'middleware' => [
                'auth:sanctum',
                'role:' . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\ProductCategory\App\Enums\ProductCategoryStatus::class,
         'type' => \Callmeaf\ProductCategory\App\Enums\ProductCategoryType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\ProductCategory\App\Exports\Api\V1\ProductCategoriesExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\ProductCategory\App\Exports\Web\V1\ProductCategoriesExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\ProductCategory\App\Exports\Admin\V1\ProductCategoriesExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\ProductCategory\App\Imports\Api\V1\ProductCategoriesImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\ProductCategory\App\Imports\Web\V1\ProductCategoriesImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\ProductCategory\App\Imports\Admin\V1\ProductCategoriesImport::class,
         ],
     ],
];
