<?php
namespace system;

defined("MYFRAMEWORK") or die("Forbiden Access");;

include_once dirname(__DIR__) . "/application/config/config.php";
include_once dirname(__DIR__) . "/application/config/database.php";

use Closure;
use Exception;
use FastRoute\Dispatcher;

class core {

    // Pusat dari framework
    public static function run()
    {
        self::init_error_hanlder();
        self::init_route();

    }    

    // Inisialisasi error handler
    public static function init_error_hanlder()
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        return $whoops->register();
    }

    // Inisialisasi route
    public static function init_route()
    {
        $file_config = include_once CONFIG_PATH . "/routes.php";

        // Fetch method and URI from somewhere
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);
            
        $routeInfo = $file_config->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                throw new Exception("404 Not found");
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                throw new Exception("Method " . (string) $allowedMethods[0] . " not allowed");
                break;
            case Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
               
                if ($handler instanceof Closure) {
                    return $handler();
                }
                echo $handler;
                break;
        }
    }

   
}