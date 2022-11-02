<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler;

enum State: string
{
    case pending = 'pending';
    case fulfilled = 'fulfilled';
    case rejected = 'rejected';

    public function isPending(): bool
    {
        return $this->value === State::pending->value;
    }

    public function isFulfilled(): bool
    {
        return $this->value === State::fulfilled->value;
    }

    public function isRejected(): bool
    {
        return $this->value === State::rejected->value;
    }
}