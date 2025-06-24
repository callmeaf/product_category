<?php

namespace Callmeaf\ProductCategory\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum ProductCategoryStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
