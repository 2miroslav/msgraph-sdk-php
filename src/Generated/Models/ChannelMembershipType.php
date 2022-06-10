<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChannelMembershipType extends Enum {
    public const STANDARD = 'standard';
    public const ESCAPED_PRIVATE = 'private';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
