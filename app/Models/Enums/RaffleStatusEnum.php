<?php

namespace App\Models\Enums;

use App\Enums\StatusEnum;
use App\Helpers\EnumHelper;

enum RaffleStatusEnum: string
{
    use EnumHelper;

    case Active = StatusEnum::Active->value;

    case Inactive = StatusEnum::Inactive->value;

    case Paused = StatusEnum::Paused->value;

    case Finished = StatusEnum::Finished->value;

}
