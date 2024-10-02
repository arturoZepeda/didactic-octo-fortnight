<?php
/**
 * PHP version 7
 *
 * @category Dbclass
 * @package  Template_Class
 * @author   Author <aaze92@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/8000
 */
class DBclass
{
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_dbname = "test";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
    public function getTable($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function getTableById($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id=$id";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function insertData($table, $data)
    {
        $sql = "INSERT INTO $table VALUES (null,$data)";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function updateData($table, $data, $condicion)
    {
        $sql = "UPDATE $table SET $data WHERE $condicion";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function deleteData($table, $condicion)
    {
        $sql = "UPDATE $table SET $condicion";
        $result = $this->conn->query($sql);
        return $result;
    }
}
