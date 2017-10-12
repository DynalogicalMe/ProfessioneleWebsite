<?php

class Engine {

    public static function start() {

        include_once('Router.php');
        include_once('web/routes.php');
        include_once('config.php');

        $requestURI = explode('/', $_SERVER['REQUEST_URI']);
        $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);

        for ($i = 0; $i < sizeof($scriptName); $i++)
        {
            if ($requestURI[$i] == $scriptName[$i])
            {
                unset($requestURI[$i]);
            }
        }

        $command = array_values($requestURI);

        $arg0 = null; $arg1 = null; $arg2 = null;

        if (isset($command[0])){
            $arg0 = $command[0];
        }

        if (isset($command[1])){
            $arg1 = '/' . $command[1] . '/';
        }

        if (isset($command[2])){
            $arg2 = $command[2];
        }

        $url = $arg0 . $arg1 . $arg2;

        $config = Config::Options();

        if($url == '/') {
            include_once($config[0]['view'] . '/' . $config[0]['home']);

            return;
        }

        $routes = Router::getAllRoutes();

        foreach ($routes as $route) {

            if($url == $route['link']){
                $urlInfo = $config[0]['view'] . '/' . $route['url'];
                include_once($config[0]['view'] . '/' . $config[0]['home']);

                return;
            }
        }

        $urlInfo = $config[0]['error'] . '/error.php';
        include_once($config[0]['view'] . '/' . $config[0]['home']);

        return;

    }
}