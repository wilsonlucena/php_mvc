<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 21/08/16
 * Time: 01:11
 */

namespace SON\Model;


abstract class Table
{
    protected $db;
    
    protected $table;
    
    
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "select * from {$this->table}";
        return $this->db->query($query);

    }
    
    public function find($id)
    {
        $query = "select * from {$this->table} WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);

    }
}