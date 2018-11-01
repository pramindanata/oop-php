<?php
namespace App\Model;

use App\Model\Model;

/**
 * Share model
 */
class Share extends Model
{
    /**
     * Get all resources
     * 
     * @return Array
     */
    public function index()
    {
        $this->query("SELECT * FROM shares");
        $results = $this->resultSet();

        return $results;
    }
}
