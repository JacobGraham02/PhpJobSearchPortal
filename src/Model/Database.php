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
    private $database_table_name;

    public function __construct() {
        $this->database_table_name = "job_search_portal";
        $this->database_configuration_file = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/config/.database.ini');
        $this->ssl_certificate = $_SERVER['DOCUMENT_ROOT'].'/src/DigiCertGlobalRootCA.crt.pem';
    }

    public function setConfigurationValuesFromIniFile(): void {
        $this->database_connection_host = $this->database_configuration_file['database_connection_host'];
        $this->database_connection_username = $this->database_configuration_file['database_connection_username'];
        $this->database_connection_password = $this->database_connection_password['database_connection_password'];
    }

    public function getConfigurationValuesInArray(): array {
        return ["database_connection_host"=>$this->database_connection_host,
                "database_connection_username"=>$this->database_connection_username,
                "database_connection_password"=>$this->database_connection_password];
    }

    public function getNewPdoDatabaseConnection() {
        $this->database_connection_pdo = new PDO(
            "mysql:host={$this->database_connection_host}, dbname={$this->database_table_name}",
            "{$this->database_connection_username}", "{$this->database_connection_password}",
            $this->ssl_certificate);
        $this->database_connection_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}