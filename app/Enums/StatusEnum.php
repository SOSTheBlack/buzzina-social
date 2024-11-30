<?php

namespace App\Enums;

enum StatusEnum: string
{
    case Active = 'active';

    case Approved = 'approved';

    case Blocked = 'blocked';

    case Cancelled = 'cancelled';

    case Deleted = 'deleted';

    case Hidden = 'hidden';

    case Inactive = 'inactive';

    case Locked = 'locked';

    case Pending = 'pending';

    case Rejected = 'rejected';

    case Requested = 'requested';

    case Restored = 'restored';

    case Trashed = 'trashed';

    case Viewed = 'viewed';

    case Visited = 'visited';

    case Paused = 'paused';

    case Finished = 'finished';
}
