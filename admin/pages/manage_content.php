
<?php

require_once '../vendor/autoload.php';
$manageCategory = new \app\Classes\BLog();


$resourse = $manageCategory->manageBlogContent();



?>




<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <div class="card-title ">
                        <h5 class="text-center text-white">Blog Table</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class=" table table-bordered">
                        <thead>
                        <th>Sl</th>
                        <th>Blog Name</th>
                        <th>Blog Title</th>
                        <th>Blog Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>

                        <?php foreach ($resourse as $key=> $blog_item): ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$blog_item['category_name']?></td>
                                <td><?=$blog_item['blog_title']?></td>
                                <td><?=$blog_item['public_status']== 1 ?  'Publish' : 'Unpublised'?></td>
                                <td>
                                    <a href="blog_view.php?id=<?=$blog_item['id']?>" class="btn-sm btn-warning">View</a>
                                    <a href="" class="btn-sm btn-warning">Edit</a>
                                    <a href="" class="btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
