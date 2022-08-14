<?php

use Jakeg\PhpJobSearchPortal\Router\Router;
use Pecee\Http\Request;

Router::setDefaultNamespace('\Jakeg\PhpJobSearchPortal\Controller');

Router::get('/', 'HomeController@home')->setName('home');

Router::get('/home', 'HomeController@home')->setName('home');

Router::get('/register', 'HomeController@register')->setName('register');

Router::basic('/companies/{id?}', 'HomeController@companies')->setName('companies');

Router::get('/login', 'HomeController@login')->setName('login');

Router::form('/form_post_request', 'HomeController@form_request')->setName('form_post_request');

//Router::error(function(Request $request, \Exception $exception) {
//    switch ($exception->getCode()) {
//        case 404:
//            response()->redirect('pageNotFound.php');
//            break;
//        case 403:
//            response()->redirect('forbidden.php');
//            break;
//    }
//});