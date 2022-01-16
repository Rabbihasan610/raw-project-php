<?php

namespace app\Classes;
use app\Classes\Database;
class BLog
{

    public function addBlog($data){
        $blog_image_name = $_FILES['blog_image']['name'];
        $directory = '../asset/images/';
        $imageUrl = $directory.$blog_image_name;
        $image_type = pathinfo($blog_image_name,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['blog_image']['tmp_name']);
        if($check){
            if(file_exists($imageUrl)){
                die('This image already exist. Please select another one. Thanks !.');
            }else{
                if ($image_type != 'jpg' && $image_type != 'png' && $image_type != 'jpeg' && $image_type != 'JPG' && $image_type != 'PNG' && $image_type != 'JPEG'){
                    die('Please chose another file jpg or png or jpeg. Thanks! ');
                }
                else{
                   if($_FILES['blog_image']['size'] > 2000000){
                        die("Image file is too largr");
                   }else{
                        move_uploaded_file($_FILES['blog_image']['tmp_name'],$imageUrl);

                        $sql = "INSERT INTO tbl_blogs (	category_id,blog_title,blog_short_des,blog_long_des,blog_image,public_status) VALUES ('$data[category_id]','$data[blog_title]','$data[blog_short_des]','$data[blog_long_des]','$imageUrl','$data[public_status]')";
                       if(mysqli_query((new Database)->dbConnection(),$sql)){
                           $msg = "Blog save successfully";
                           return $msg;
                       }else{
                           die("Query Problem".mysqli_error((new Database)->dbConnection()));
                       }

                   }
                }
            }
        }else{
            die('Please Chose a image file thanks !.');
        }
    }

    public function allCategoryItem(){
        $sql = "SELECT * FROM tbl_categories WHERE pub_status= 0";
        $publiction_status_form_db = mysqli_query((new Database)->dbConnection(),$sql);
        return $publiction_status_form_db;

    }
    public function manageBlogContent(){
        $sql = "SELECT b.*, c.category_name FROM tbl_blogs as b, tbl_categories as c WHERE b.category_id=c.id";
        $return_form_db = mysqli_query((new Database)->dbConnection(),$sql);
        return $return_form_db;

    }
    public function viewBlogInfo($data){
        $sql = "SELECT b.*, c.category_name FROM tbl_blogs as b, tbl_categories as c WHERE b.category_id=c.id AND b.id=$data";
        $publiction_status_form_db = mysqli_query((new Database)->dbConnection(),$sql);
        return $publiction_status_form_db;
    }


}