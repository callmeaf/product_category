<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->string('slug')->primary();
            $table->string('status');
            $table->string('type');
            /**
             * @var \Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface $productCategoryRepo
             */
            $productCategoryRepo = app(\Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface::class);
            $table->string('parent_id')->nullable();
            $table->foreign('parent_id')->references($productCategoryRepo->getModel()->getKeyName())->on($productCategoryRepo->getTable())->cascadeOnUpdate()->nullOnDelete();
            $table->string('title');
            $table->text('content');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
