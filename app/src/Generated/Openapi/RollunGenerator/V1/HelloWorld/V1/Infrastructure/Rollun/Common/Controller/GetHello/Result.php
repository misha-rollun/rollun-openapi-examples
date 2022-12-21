<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\Status;
use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\TaskInfo;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\Error;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Dto\HelloWorldResponse;

class Result
{
    public function __construct(
        private Status $status,
        private ?HelloWorldResponse $result = null,
        // в type hint потрапляє responseBody з 4хх та 5хх помилок. Якщо таких тіл декілька різних, то можна викидувати
        // помилку генерації
        private ?Error $error = null,
        private ?TaskInfo $taskInfo = null
    )
    {
        if ($this->status->isPending() && $this->taskInfo === null) {
            throw new \InvalidArgumentException('TaskId cannot be null when status is pending.');
        } elseif ($this->status->isFulfilled() && $this->result === null) {
            throw new \InvalidArgumentException('Result cannot be null when status is fulfilled.');
        } elseif ($this->status->isRejected() && $this->error === null) {
            throw new \InvalidArgumentException('Problem cannot be null when status is rejected.');
        }
    }

    // Результатом є схема з 200 або 201(якщо немає 200) статус коду
    // Якщо в операції немає ні 200, а ні 201 статус коду - помилка
    // Якщо у статус коду декілька схем під різними медіа типами - то перерахувати декілька варіантів
    public function getResult(): HelloWorldResponse
    {
        return $this->result;
    }

    // Результатом є схема з 4хх та 5хх статус кодів
    // У всіх 4хх та 5хх статус кодів має бути одна й та сама схема, якщо це не так то можна кидати помилку генерації
    public function getError(): Error
    {
        return $this->error;
    }

    public function getTaskInfo(): TaskInfo
    {
        return $this->taskInfo;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }
}