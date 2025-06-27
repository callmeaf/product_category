<?php

namespace Callmeaf\ProductCategory\App\Http\Controllers\Admin\V1;

use Callmeaf\Base\App\Http\Controllers\Admin\V1\AdminController;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ProductCategoryController extends AdminController implements HasMiddleware
{
    public function __construct(protected ProductCategoryRepoInterface $productCategoryRepo)
    {
        parent::__construct($this->productCategoryRepo->config);
    }

    public static function middleware(): array
    {
        return [
           //
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->productCategoryRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->productCategoryRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->productCategoryRepo->builder(fn($query) => $query->with(['children','props']))->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->productCategoryRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->productCategoryRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->productCategoryRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->productCategoryRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->productCategoryRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->productCategoryRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->productCategoryRepo->forceDelete(id: $id);
    }
}
