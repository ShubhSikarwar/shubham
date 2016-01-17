<?php
class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function Dbconfig() {
        $this -> serverName = '127.0.0.1';
        $this -> userName = 'root';
        $this -> passCode = 'kspl1234';
        $this -> dbName = 'shubham';
    }
}
?>