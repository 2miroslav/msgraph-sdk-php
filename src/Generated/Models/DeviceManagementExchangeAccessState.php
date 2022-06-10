<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementExchangeAccessState extends Enum {
    public const NONE = 'none';
    public const UNKNOWN = 'unknown';
    public const ALLOWED = 'allowed';
    public const BLOCKED = 'blocked';
    public const QUARANTINED = 'quarantined';
}
