
<?php

require_once '../vendor/autoload.php';
$manageCategory = new \app\Classes\BLog();


$resourse = $manageCategory->manageBlogContent();
$id = $_GET['id'];
$resourse_id = $manageCategory->viewBlogInfo($id);
$after_assoc = mysqli_fetch_assoc($resourse_id );


?>




<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <div class="card-title ">
                        <h5 class="text-center text-white">Blog View</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class=" table table-bordered">
                        <tr>
                            <td>blog Id</td>
                            <td><?=$after_assoc['id']?></td>
                        </tr>
                        <tr>
                            <td>Blog Title</td>
                            <td><?=$after_assoc['blog_title']?></td>
                        </tr>
                        <tr>
                            <td>Blog Name</td>
                            <td><?=$after_assoc['category_name']?></td>
                        </tr>
                        <tr>
                            <td>Blog Short Description</td>
                            <td><?=$after_assoc['blog_short_des']?></td>
                        </tr>
                        <tr>
                            <td>Blog Long Description</td>
                            <td><?=$after_assoc['blog_long_des']?></td>
                        </tr>
                        <tr>
                            <td>Blog Image</td>
                            <td><img src="<?=$after_assoc['blog_image']?>" alt="" width="300" height="300"></td>
                        </tr>
                        <tr>
                            <td>Public Status</td>
                            <td><?=$after_assoc['public_status']== 1 ?  'Publish' : 'Unpublised'?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
