<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\DTO\GetHelloQueryParameters;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'serializer' => [
                'metadata' => [
                    GetHelloQueryParameters::class => [
                        'properties' => [
                            // назва поля в об'єкті
                            'name' => [
                                // назва поля в маніфесті
                                'serializedName' => 'name'
                            ]
                        ]
                    ],
                    // тут повинна бути описана кожна dto з .../Common/Dto
                ]
            ]
        ];
    }
}