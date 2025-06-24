<?php

namespace Callmeaf\ProductCategory\App\Exports\Web\V1;

use Callmeaf\ProductCategory\App\Models\ProductCategory;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class ProductCategoriesExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private ProductCategoryRepoInterface $productcategoryRepo;
    public function __construct()
    {
        $this->productcategoryRepo = app(ProductCategoryRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->productcategoryRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->productcategoryRepo->trashed();
        }

        $this->productcategoryRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->productcategoryRepo->lazy();
        }

        return $this->productcategoryRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param ProductCategory $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
