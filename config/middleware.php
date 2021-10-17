<?php

// middleware is for manipulate the request and response object
use Slim\App;
use Slim\Middleware\ErrorMiddleware;

return function (App $app) {
    // parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // slim built-in
    $app->addRoutingMiddleware();

    // catch exceptions and errors
    $app->add(ErrorMiddleware::class);
};
