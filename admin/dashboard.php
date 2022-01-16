<?php
    session_start();

    if (isset($_SESSION['id'])==null){
        header('location: index.php');
    }
    require_once "../vendor/autoload.php";
    $login = new \app\Classes\Login_form();


    if (isset($_GET['logout'])){
        $login->adminLogout();
    }


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

        <?php include_once 'include/menu.php'; ?>

        <?php

            if (isset($pages)){
                if($pages == "add-category"){
                    include_once 'pages/add-category-content.php';
                }
                if($pages == "add-blog"){
                    include_once 'pages/blog_content.php';
                }
                if($pages == "manage-category"){
                    include_once 'pages/manage_category_content.php';
                }
                if($pages == "manage-blog"){
                    include_once 'pages/manage_content.php';
                }
                if($pages == "blog-view"){
                    include_once 'pages/view_blog_content.php';
                }

            }else{
                include_once 'pages/main-content.php';
            }





        ?>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <script src="../asset/tinymce/tinymce.min.js" referrerpolicy="origin"></script>


        <script>tinymce.init({selector:'.textarea'});</script>
</body>
</html>
