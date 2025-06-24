<?php

namespace Callmeaf\ProductCategory\App\Http\Requests\Admin\V1;

use Callmeaf\ProductCategory\App\Enums\ProductCategoryStatus;
use Callmeaf\ProductCategory\App\Enums\ProductCategoryType;
use Callmeaf\ProductCategory\App\Repo\Contracts\ProductCategoryRepoInterface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class ProductCategoryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(ProductCategoryRepoInterface $productCategoryRepo): array
    {
        return [
            'title' => ['required','string','max:255'],
            'status' => ['required',new Enum(ProductCategoryStatus::class)],
            'type' => ['required',new Enum(ProductCategoryType::class)],
            'parent_id' => ['nullable',Rule::exists($productCategoryRepo->getTable(),$productCategoryRepo->getModel()->getRouteKeyName())->where('type',$this->get('type'))],
            'content' => ['nullable','string','max:700']
        ];
    }
}
