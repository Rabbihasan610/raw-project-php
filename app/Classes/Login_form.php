<?php

namespace app\Classes;

use app\Classes\Database;
class Login_form
{
    public function check_login($data){
        $email = $data['user_email'];
        $password = md5($data['user_password']);
        $sql = "SELECT * FROM tbl_users WHERE user_email = '$email' AND user_password = '$password'";

        if(mysqli_query((new Database)->dbConnection(),$sql)){
            $query_result = mysqli_query((new Database)->dbConnection(),$sql);
            $user = mysqli_fetch_assoc($query_result);
            if ($user){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['user_name'] = $user['user_name'];
                header("location: dashboard.php");
            }else{
                $message = "Please use valid emaill Address & Password";
                return $message;
            }

        }else{
            die("Query Problem".mysqli_error((new Database)->dbConnection()));
        }



    }

    public function adminLogout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['user_name']);
        header("location: index.php");
    }
}