<?php

namespace Jakeg\PhpJobSearchPortal\Model\Interfaces;

interface IDatabaseOperations {

    public function read($database_table, $database_columns, $where_clause = "", $limit = "");
    public function write($database_table, $database_columns, $values, $where_clause = "");
    public function update($database_table, $database_columns, $values, $where_clause = "");
    public function delete($database_table, $database_columns, $where_clause);
}