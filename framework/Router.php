<?php namespace Framework;

class Router
{
    private static $_routes = [];

    public static function set($route, $action)
    {
        self::$_routes[$route] = $action;
    }

    public static function load($request)
    {
        /* load the routes tabe */
        $routes = self::$_routes;

        /* explode the request and check the route */
        $route = explode('/', $request);
        $validRoute = array_key_exists($route[0], $routes);
        $parameter = $validRoute ? null : "404";

        /* load info from routes table */
        $controller = $validRoute ? $routes[$route[0]]['controller'] : "ErrorController";
        $action = $validRoute ? $routes[$route[0]]['action'] : "display";
        
        $class = "\\Application\\Controllers\\$controller";
        $obj = new $class;

        return $obj->$action($parameter, $route[0]);
    }
}
