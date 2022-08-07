<?php

namespace Jakeg\PhpJobSearchPortal\Controller;
use Jakeg\PhpJobSearchPortal\Model\ValidatePostRequest;
use Jakeg\PhpJobSearchPortal\Model\ValidateGetRequest;

class HomeController {

    private const VALID_REQUEST_TYPES = array(
        'POST' => 'src/Model/ValidatePostRequest.php',
        'GET' => 'src/Model/ValidateGetRequest.php'
    );

    public function form_request() {
        $HTTP_REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
        if (!isset(self::VALID_REQUEST_TYPES[$HTTP_REQUEST_METHOD])) {
            response()->redirect("public/home.php");
        }
        if ($HTTP_REQUEST_METHOD === 'POST' && new ValidatePostRequest($_REQUEST)) {
            echo 'post request';
        }
        if ($HTTP_REQUEST_METHOD === 'GET' && new ValidateGetRequest($_REQUEST)) {
            echo 'get request';
        }
     }

    function home() {
        response()->redirect('public/home.php');
    }

    public function login() {
        response()->redirect('../src/View/login.php');
    }

    public function register() {
        response()->redirect('../src/View/register.php');
    }

    public function companies($id = null) {
        return 'HomeController -> companies -> id: ' . $id;
    }
}