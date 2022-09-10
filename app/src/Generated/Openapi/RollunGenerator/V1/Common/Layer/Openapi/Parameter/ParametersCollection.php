<?php

declare(strict_types=1);

namespace Generated\Openapi\RollunGenerator\V1\Common\Layer\Openapi\Parameter;

class ParametersCollection
{
    public function __construct(
        private array $pathParameters,
        private array $queryParameters,
        private array $headerParameters,
        private array $cookieParameters,
    )
    {
    }

    public function hasPathParameter(string $name): bool
    {
        return isset($this->pathParameters[$name]);
    }

    public function setPathParameter(string $name, string $value): void
    {
        $this->pathParameters[$name] = $value;
    }

    public function getPathParameter(string $name): Parameter
    {
        if ($this->hasPathParameter($name)) {
            return $this->pathParameters[$name];
        }
        throw new ParameterNotFound('path', $name);
    }

    public function hasQueryParameter(string $name): bool
    {
        return isset($this->queryParameters[$name]);
    }

    public function setQueryParameter(string $name, string $value): void
    {
        $this->queryParameters[$name] = $value;
    }

    public function getQueryParameter(string $name): Parameter
    {
        if ($this->hasQueryParameter($name)) {
            return $this->queryParameters[$name];
        }
        throw new ParameterNotFound('query', $name);
    }

    public function hasHeaderParameter(string $name): bool
    {
        return isset($this->headerParameters[$name]);
    }

    public function setHeaderParameter(string $name, string $value): void
    {
        $this->headerParameters[$name] = $value;
    }

    public function getHeaderParameter(string $name): Parameter
    {
        if ($this->hasHeaderParameter($name)) {
            return $this->headerParameters[$name];
        }
        throw new ParameterNotFound('header', $name);
    }

    public function hasCookieParameter(string $name): bool
    {
        return isset($this->cookieParameters[$name]);
    }

    public function setCookieParameter(string $name, string $value): void
    {
        $this->cookieParameters[$name] = $value;
    }

    public function getCookieParameter(string $name): Parameter
    {
        if ($this->hasCookieParameter($name)) {
            return $this->cookieParameters[$name];
        }
        throw new ParameterNotFound('cookie', $name);
    }
}