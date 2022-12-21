<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Server\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Infrastructure\Rollun\Handler\ClientInfo;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Openapi\Common\Operation\GetHello\Request;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Infrastructure\Rollun\Common\Controller\GetHello\Request as RollunRequest;

class RequestConverter
{
    public function convert(Request $request): RollunRequest
    {
        $query = new RollunRequest();
        $query->clientInfo = $this->createClientInfo($request);
        $query->query = $request->queryParameters;
        return $query;
    }

    private function createClientInfo(Request $request): ClientInfo
    {
        $clientInfo = new ClientInfo();
        if (isset($request->headers->language)) {
            $clientInfo->language = $request->headers->language;
        }
        if (isset($request->headers->userAgent)) {
            $clientInfo->userAgent = $request->headers->userAgent;
        }
        return $clientInfo;
    }
}