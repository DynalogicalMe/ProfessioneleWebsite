<?php

define('ROOT_PATH', substr(dirname(__FILE__), strlen($_SERVER['DOCUMENT_ROOT'])));

include_once('app/engine.php');

Engine::start();