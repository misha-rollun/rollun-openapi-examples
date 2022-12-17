<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Framework\Laminas;

use Laminas\ConfigAggregator\PhpFileProvider;

class ConfigProvider extends PhpFileProvider
{
    public function __construct($pattern = null)
    {
        $pattern = $pattern ?? realpath(__DIR__) . '/config/{{,*.}global,{,*.}local}.php';
        parent::__construct($pattern);
    }
}