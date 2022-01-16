<?php

namespace app\Classes;
use app\Classes\Database;
class Category
{

    public function addCategory($data){
        $category_name = $data['category_name'];
        $category_title = $data['category_title'];
        $category_des = $data['category_des'];
        $pub_status = $data['pub_status'];

        if ($category_name==null && $category_title==null &&  $category_des==null){
            $msg = "Please Insert Valid Information";
            return $msg;
        }else{
        $sql = "INSERT INTO tbl_categories (category_name,category_title,category_des,pub_status) VALUES ('$category_name','$category_title','$category_des','$pub_status')";
            if(mysqli_query((new Database)->dbConnection(),$sql)){
                $msg = "Category save successfully";
                return $msg;
            }else{
                die("Query Problem".mysqli_error((new Database)->dbConnection()));
            }
        }
    }
    public function manageCategory(){
        $sql = "SELECT * FROM tbl_categories";
        $return_form_db = mysqli_query((new Database)->dbConnection(),$sql);
        return $return_form_db;

    }


}