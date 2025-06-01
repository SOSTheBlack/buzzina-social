<?php

namespace App\Models\Enums;

use App\Helpers\EnumHelper;

enum RaffleTicketTypeEnum: string
{
    use EnumHelper;

    case Random = 'random';

    case Select = 'select';
}
