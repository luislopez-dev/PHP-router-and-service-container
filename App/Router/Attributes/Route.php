<?php

namespace App\Router\Attributes;

use Attribute;
use App\Interfaces\IRoute;

#[Attribute(Attribute::TARGET_METHOD|Attribute::IS_REPEATABLE)]
class Route implements IRoute
{
    public function __construct(public string $routePath, public string $method = "get")
    {
    }
}