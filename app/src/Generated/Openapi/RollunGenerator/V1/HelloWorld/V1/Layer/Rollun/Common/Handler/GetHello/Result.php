<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Dto\HelloWorldResponse;

class Result
{
    public function __construct(
        private readonly Status $state,
        private readonly ?HelloWorldResponse $result = null,
        // в type hint потрапляє responseBody з 4хх та 5хх помилок. Якщо таких тіл декілька різних, то можна викидувати
        // помилку генерації
        private readonly ?Error $error = null
    )
    {
        if ($this->state->isPending()) {
            throw new \InvalidArgumentException('This operation is not async.');
        } elseif ($this->state->isFulfilled() && $this->result === null) {
            throw new \InvalidArgumentException('Result cannot be null when state is fulfilled.');
        } elseif ($this->state->isRejected() && $this->error === null) {
            throw new \InvalidArgumentException('Problem cannot be null when state is rejected.');
        }
    }

    // Результатом є схема з 200 або 201(якщо немає 200) статус коду
    // Якщо в операції немає ні 200, а ні 201 статус коду - помилка
    // Якщо у статус коду декілька схем під різними медіа типами - то перерахувати декілька варіантів
    public function getResult(): ?HelloWorldResponse
    {
        return $this->result;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function getLastStatus(): Status
    {
        return $this->state;
    }

    public function checkCurrentStatus(): Status
    {
        // Для асинхронних операцій буде інша реалізація.
        return $this->state;
    }
}