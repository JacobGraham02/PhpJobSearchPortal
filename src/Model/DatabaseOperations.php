<?php

namespace Jakeg\PhpJobSearchPortal\Model;

use Jakeg\PhpJobSearchPortal\Model\Interfaces\IDatabaseOperations;

class DatabaseOperations {

    private $database_instance;
    private $database_pdo_connection;

    public function __construct() {
        $this->database_instance = new Database();
        $this->database_pdo_connection = $this->database_instance->getDatabaseConnection();
        return $this->database_pdo_connection;
    }

}