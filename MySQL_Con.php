<?php
class MySQL_Con
{
    protected $conn;



    function __construct()
    {
        $this->conn = NULL;
    }



    function mysqlConnect()
    {
        // Create connection
        $this->conn = new mysqli('localhost', 'root', 'root','StudentDB');

        // Check connection
        if($this->conn->connect_error)
        {
            die("Connection failed " . $this->conn->connect_error);
        }
    }


    function selectQuery($strSQL)
    {
        $dsResult = $this->conn->query($strSQL);

        return $dsResult;
    }



    function modifyQuery($strSQL)
    {
        $blSuccess = $this->conn->query($strSQL);

        return $blSuccess;
    }
}
?>
