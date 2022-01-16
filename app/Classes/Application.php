<?php

namespace app\Classes;
use app\Classes\Database;
class Application
{
    public function view_front_blog(){
        $sql = "SELECT * FROM tbl_blogs WHERE public_status = 0";
        $return_res = mysqli_query((new Database)->dbConnection(),$sql);
        return $return_res;
    }

}