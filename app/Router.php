<?php

class Router {
    
    static $routes = array();

    public static function add($link, $url, $as = null){
        self::$routes[] = [
            'link'  =>  $link,
            'url'   =>  $url . '.php',
            'as'    =>  $as
        ];
    }

    public static function getAllRoutes(){
        return self::$routes;
    }

    public static function name($input){
        foreach (self::$routes as $route){
            if($input == $route['as'] || $input == $route['link']){
                echo ROOT_PATH . '/' . $route['link'];
                break;
            }
        }
    }
}
