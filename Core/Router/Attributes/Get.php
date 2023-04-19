<?php

namespace Router\Attributes;

class Get extends Route
{
    public function __construct(string $routePath)
    {
        parent::__construct($routePath);
    }
}