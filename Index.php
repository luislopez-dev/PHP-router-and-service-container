<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Router\Router;
use App\Exceptions\RouteNotFoundException;
use App\Container;

/**
 * Application entry point
 */
final class Index
{
    public function __construct(protected Router $router, protected array $request)
    {
    }
     public function RunApp(): void {

        try {
            echo $this->router->resolve($this->request['uri'], strtolower($this->request['method']));
        } catch (RouteNotFoundException) {
            http_response_code(404);
            echo "404";
        }
    }
}

$container = new Container();
$router    = new Router($container);
(new Index(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]
))->RunApp();