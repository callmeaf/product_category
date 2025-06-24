<?php

namespace Callmeaf\ProductCategory\App\Imports\Api\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\ProductCategory\App\Enums\ProductCategoryStatus;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductCategoriesImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private ProductCategoryRepoInterface $productcategoryRepo;

    public function __construct()
    {
        $this->productcategoryRepo = app(ProductCategoryRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->productcategoryRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->productcategoryRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(ProductCategoryStatus::class)],
        ];
    }

}
