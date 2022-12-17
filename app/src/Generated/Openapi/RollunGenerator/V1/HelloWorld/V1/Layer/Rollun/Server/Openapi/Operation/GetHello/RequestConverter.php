<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Server\Openapi\Operation\GetHello;

use Generated\Openapi\RollunGenerator\V1\Common\Layer\Rollun\Handler\ClientInfo;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Openapi\Common\Operation\GetHello\Request;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Layer\Rollun\Common\Handler\GetHello\Request as RollunRequest;

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