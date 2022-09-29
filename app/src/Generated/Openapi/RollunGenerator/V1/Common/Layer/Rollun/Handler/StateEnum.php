<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler;

enum StateEnum: string
{
    case pending = 'pending';
    case fulfilled = 'fulfilled';
    case rejected = 'rejected';
}