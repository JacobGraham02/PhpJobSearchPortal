<?php

namespace Jakeg\PhpJobSearchPortal\Model;

use Jakeg\PhpJobSearchPortal\Model\Interfaces\IDatabaseOperations;

class UserDatabaseOperations extends DatabaseOperations implements IDatabaseOperations {

    private $database_connection;

    public function __construct() {
        $this->database_connection = parent::__construct();
    }

    public function read($database_table, $database_columns, $where_clause = "", $limit = "")
    {
        // TODO: Implement read() method.
    }

    public function write($database_table, $database_columns, $values, $where_clause = "")
    {
        // TODO: Implement write() method.
    }

    public function update($database_table, $database_columns, $values, $where_clause = "")
    {
        // TODO: Implement update() method.
    }

    public function delete($database_table, $database_columns, $where_clause)
    {
        // TODO: Implement delete() method.
    }
}