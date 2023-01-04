<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Server\Controller\GetHello;

use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\Controller;
use Generated\Openapi\RollunGenerator\V1\HelloWorld\V1\Common\Controller\GetHello\OpenapiResponse;

/**
 * Необхідний, щоб по тайп хінту діставати саме серверний контроллер, а не клієнтський
 * Від цього класу повинен наслідуватись серверний контролер, який реалізує програміст
 */
abstract class AbstractController implements Controller
{
    protected function createSuccessResponse(object $body): OpenapiResponse
    {
        $openapiResponse = new OpenapiResponse();
        $openapiResponse->body = $body;
        $openapiResponse->contentType = 'application/vnd.rollun+json';
        $openapiResponse->statusCode = 200;
        return $openapiResponse;
    }
}