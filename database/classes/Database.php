<?php
namespace Classes;

use PDO;

/**
 * Database configuration
 */
class Database
{
    private $host = "localhost";
    private $database = "blog";
    private $user = "root";
    private $password = "es segar";

    private $dbh;
    private $error;
    private $stmt;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->database};";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * Query
     *
     * @param  String $query
     *
     * @return void
     */
    public function query($query)
    {
        $this->stmt = $this->dbh
            ->prepare($query);
    }

    /**
     * Bind value to query
     *
     * @param  Strings $param
     * @param  mixed   $value
     * @param  mixed   $type
     *
     * @return void
     */
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt
            ->bindValue($param, $value, $type);
    }

    /**
     * Execute Query
     *
     * @return void
     */
    public function execute()
    {
        $this->stmt->execute();
    }

    /**
     * Get data as assoc array
     *
     * @return Array
     */
    public function resultSet()
    {
        $this->execute();

        return $this->stmt
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Check last inserted record ID
     *
     * @return void
     */
    public function lastInsertId()
    {
        $this->dbh->lastInsertId();
    }
}
