<?php
namespace App\Model;

use \PDO as PDO;

/**
 * Model abstract class
 */
class Model
{
    protected $dbh;
    protected $stmt;

    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    }

    /**
     * Query
     * 
     * @param String $query
     * 
     * @return void
     */
    public function query(String $query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    /**
     * Bind value to query
     *
     * @param  String $param
     * @param  mixed   $value
     * @param  PDO   $type
     *
     * @return void
     */
    public function bind(String $param, $value, PDO $type = null)
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