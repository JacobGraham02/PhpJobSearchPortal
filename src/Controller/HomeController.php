<?php

namespace Jakeg\PhpJobSearchPortal\Controller;
use Jakeg\PhpJobSearchPortal\Model\DatabaseActions;
use Jakeg\PhpJobSearchPortal\Model\ValidateRegisterPostRequest;
use Jakeg\PhpJobSearchPortal\Model\ValidateGetRequest;

class HomeController {

    private $database_actions;

    public function __construct() {
        $this->database_actions = new DatabaseActions();
    }

    private const VALID_REQUEST_TYPES = array(
        'POST' => 'src/Model/ValidateRegisterPostRequest.php',
        'GET' => 'src/Model/ValidateGetRequest.php'
    );

    public function form_post_request() {
        $HTTP_REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
        if (!isset(self::VALID_REQUEST_TYPES[$HTTP_REQUEST_METHOD])) {
            response()->redirect("public/home.php");
        }
        if ($HTTP_REQUEST_METHOD === 'POST' && new ValidateRegisterPostRequest($_REQUEST)) {
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