<?php

class Database
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = '';
    private $db_name = "testing";
    private $mysqli = "";
    private $result=array();
    private $con = false;

    public function __construct()
    {
        if (!$this->con) {
            $this->mysqli=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
            if($this->mysqli->connect_error){
array_push($this->result,$this->mysqli->connect_error);
return false;
            }
        }else{
            return true;
        }
    }

    public function insert()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function select()
    {
    }

    public function __destruct()
    {
if($this->con){
if($this->mysqli->close()){
    $this->con=false;
    return true;
}
}else{
    return false;
}
    }
}
