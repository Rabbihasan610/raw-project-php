<?php



    if (isset($_SESSION['id'])==null){
        header('location: index.php');
    }
    require_once '../vendor/autoload.php';
    $addBlog = new \app\Classes\BLog();

    if(isset($_POST['btn'])){
        $msg = $addBlog->addBlog($_POST);

    }
    $result_publiction_status = $addBlog->allCategoryItem();






?>


<div class="container mt-4">
    <div class="row">
        <div class="col-sm-10 m-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="text-center">Blog Content</h5>
                    </div>
                </div>
                <div class="card-body">
                    <h3><?php if (isset($msg)) echo $msg; ?></h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="" class="form-control">Select Category</label>
                            </div>
                            <div class="col-sm-8">
                                <select name="category_id" id="" class="form-control">
                                    <option>-----Select BLog Item-----</option>
                                    <?php while ($after_assoc = mysqli_fetch_assoc($result_publiction_status)){ ?>
                                      <option value="<?php echo $after_assoc['id']; ?>"><?php echo $after_assoc['category_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="" class="form-control">Blog Title</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="blog_title" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="" class="form-control">Blog Description Short</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="blog_short_des" class="form-control">
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <label for="" class="form-control">Blog Long Description</label>
                            </div>
                            <div class="col-sm-8">
                                <textarea name="blog_long_des" class="form-control textarea" ROWS="10"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="" class="form-control">Blog Image</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="file" name="blog_image" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <label for="" class="form-control">Publication Status</label>
                            </div>
                            <div class="col-sm-8">
                                <select name="public_status" id="" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <input type="submit" name="btn" class="btn btn-primary w-100">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>