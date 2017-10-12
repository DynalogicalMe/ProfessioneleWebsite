<?php

class Config {

    static $config = [];

    public static function Options($home = 'index.php', $view = 'resources/view', $error = 'resources/view/error') {

        self::$config[] = [
            'home'   =>  $home,
            'view'   =>  $view,
            'error'  =>  $error
        ];

        return self::$config;
    }
}