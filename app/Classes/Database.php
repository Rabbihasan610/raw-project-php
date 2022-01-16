<?php

namespace app\Classes;

class Database
{

    public function dbConnection(){
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "db_blog";
        $con = mysqli_connect($hostName,$userName,$password,$dbName);
        return $con;
    }
}