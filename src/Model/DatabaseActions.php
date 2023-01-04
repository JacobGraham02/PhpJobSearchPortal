<?php

namespace Jakeg\PhpJobSearchPortal\Model;
use Jakeg\PhpJobSearchPortal\Model\Database;

class DatabaseActions {

    private $database_instance;

    public function __construct() {
        $this->database_instance = new Database();
        $this->database_instance->intializeNewDatabaseConnection();
    }


}