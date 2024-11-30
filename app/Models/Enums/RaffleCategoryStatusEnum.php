<?php

namespace App\Models\Enums;

use App\Enums\StatusEnum;
use App\Helpers\EnumHelper;

enum RaffleCategoryStatusEnum: string
{
    use EnumHelper;

    case Active = StatusEnum::Active->value;

    case Inactive = StatusEnum::Inactive->value;
}
