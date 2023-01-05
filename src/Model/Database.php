<?php

namespace Jakeg\PhpJobSearchPortal\Model;

use PDO;

final class Database {

    private $ssl_certificate;
    private $database_connection_host;
    private $database_connection_username;
    private $database_connection_password;
    private $database_configuration_file;
    private $database_connection_pdo;
    private const DATABASE_TABLE_NAME = "job_search_portal";

    public function __construct() {
        $this->database_configuration_file = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/config/.database.ini');
        $this->setConfigurationValuesFromIniFile();
        $this->initializeNewDatabaseConnection();
    }

    private function setConfigurationValuesFromIniFile(): void {
        $this->database_connection_host = $this->database_configuration_file['database_connection_host'];
        $this->database_connection_username = $this->database_configuration_file['database_connection_username'];
        $this->database_connection_password = $this->database_configuration_file['database_connection_password'];
    }

    public function getConfigurationValues(): array {
        return ["database_connection_host"=>$this->database_connection_host,
                "database_connection_username"=>$this->database_connection_username,
                "database_connection_password"=>$this->database_connection_password];
    }

    private function initializeNewDatabaseConnection()
    {
        $dbname = self::DATABASE_TABLE_NAME;
        $this->database_connection_pdo = new PDO(
            "mysql:host={$this->database_connection_host}; dbname={$dbname}",
            "root", "",
            array(PDO::ATTR_PERSISTENT => true));
        $this->database_connection_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getDatabaseConnection(): PDO {
        return $this->database_connection_pdo;
    }
}