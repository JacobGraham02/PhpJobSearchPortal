<?php

//namespace Jakeg\PhpJobSearchPortal\Model;
//use Jakeg\PhpJobSearchPortal\Model\Database;
//use Jakeg\PhpJobSearchPortal\Model\Interfaces\IDatabaseOperations;
//
//class DatabaseActions implements IDatabaseOperations {
//
//    private $database_instance;
//    private $database_pdo_connection;
//
//    public function __construct() {
//        $this->database_instance = new Database();
//        $this->database_pdo_connection = $this->database_instance->getDatabaseConnection();
//    }
//
//    public function read($database_table, $database_columns, $where_clause = "", $limit = 1000)
//    {
//        $query_database_columns = $this->queryColumnBuilder($database_columns);
//        $sql_query_statement = "SELECT $query_database_columns FROM $database_table WHERE $where_clause LIMIT $limit";
//        $sql_prepared_query = $this->database_pdo_connection->prepare($sql_query_statement);
//        $split_database_query_columns = explode(",", $query_database_columns);
//
//        for ($i = 0; $i < count($database_columns); $i++) {
//
//        }
//
//        $sql_prepared_query->execute();
//        $items = $sql_prepared_query->fetchAll();
//        return $items;
//    }
//
//    public function write($database_table, $database_columns, $values, $where_clause = "")
//    {
//        $database_insert_values = $this->queryValuesBuilder($values);
//        $database_insert_columns = $this->queryColumnBuilder($database_columns);
//        $sql_query_statement = "INSERT INTO $database_table ($database_insert_columns) VALUES ($database_insert_values) WHERE $where_clause";
//        $sql_prepared_query = $this->database_pdo_connection->prepare($sql_query_statement);
//        $sql_prepared_query->bindParam()
//        $sql_prepared_query->execute();
//
//    }
//
//    public function update($database_table, $database_columns, $values, $where_clause = "")
//    {
//        // TODO: Implement update() method.
//    }
//
//    public function delete($database_table, $database_columns, $where_clause)
//    {
//        // TODO: Implement delete() method.
//    }
//
//    private function queryColumnAndValueBuilder($database_columns, $values) {
//        $database_columns_array = explode(",", $database_columns);
//        $database_values_array = explode(",", $values);
//        $complete_database_query = "";
//
//        for ($i = 0; $i < count($database_columns_array); $i++) {
//            $complete_database_query .= $database_columns[$i] . "=" . strval($database_values_array[$i]);
//
//            if ($i < count($database_columns_array) - 1) {
//                $complete_database_query .= ',';
//            }
//        }
//        return $complete_database_query;
//    }
//    private function queryColumnBuilder($database_columns) {
//        $database_columns_array = explode(",", $database_columns);
//        $complete_database_query = "";
//
//        for ($i = 0; $i < count($database_columns); $i++) {
//            $complete_database_query .= $database_columns_array[$i];
//
//            if ($i < count($database_columns_array) - 1) {
//                $complete_database_query .= ',';
//            }
//        }
//        return $complete_database_query;
//    }
//    private function queryValuesBuilder($values) {
//        $database_values_array = explode(",", $values);
//        $complete_database_query = "";
//
//        for ($i = 0; $i < count($values); $i++) {
//            $complete_database_query .= $database_values_array[$i];
//
//            if ($i < count($database_values_array) - 1) {
//                $complete_database_query .= ',';
//            }
//        }
//        return $complete_database_query;
//    }
//}