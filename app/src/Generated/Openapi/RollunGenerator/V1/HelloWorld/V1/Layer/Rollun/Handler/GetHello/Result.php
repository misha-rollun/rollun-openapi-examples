<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Handler\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\Problem;
use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\State;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Dto\HelloWorldResponse;

class Result
{
    public function __construct(
        private readonly State $state,
        private readonly ?HelloWorldResponse $result = null,
        private readonly ?Problem $problem = null
    )
    {
        if ($this->state->isPending()) {
            throw new \InvalidArgumentException('This operation is not async.');
        } elseif ($this->state->isFulfilled() && $this->result === null) {
            throw new \InvalidArgumentException('Result cannot be null when state is fulfilled.');
        } elseif ($this->state->isRejected() && $this->problem === null) {
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

    // Результат завжди Problem. Якщо в операції для 4хх або 5хх вказано інший медіа тип, то помилка
    public function getProblem(): ?Problem
    {
        return $this->problem;
    }

    public function getLastState(): State
    {
        return $this->state;
    }

    public function checkCurrentState(): State
    {
        // Для асинхронних операцій буде інша реалізація.
        return $this->state;
    }
}