<?php

    require_once '../vendor/autoload.php';
    $addCategory = new \app\Classes\Category();
    $msg = ' ';
    if (isset($_POST['btn'])){
      $msg = $addCategory->addCategory($_POST);
    }




?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Add Category</h3>
                    </div>
                    <div class="card-body">
                        <h5><?php echo  $msg; ?></h5>
                        <form action="" method="post">
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <lable for="">Category Name</lable>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="category_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <lable for="">Title</lable>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="category_title" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <lable for="">Description</lable>
                                </div>
                                <div class="col-sm-9">
                                   <textarea col="20" row="5" name="category_des" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <lable for="">Publication Status</lable>
                                </div>
                                <div class="col-sm-9">
                                    <select name="pub_status" id="" class="form-control">
                                        <option value="0">Publish</option>
                                        <option value="1">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <input type="submit" name="btn" class="btn btn-primary" value="Add Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



