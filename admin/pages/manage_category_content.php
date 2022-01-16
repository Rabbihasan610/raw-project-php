
<?php
    if (isset($_SESSION['id'])==null){
        header('location: index.php');
    }
    require_once '../vendor/autoload.php';
    $manageCategory = new \app\Classes\Category();


    $resourse = $manageCategory->manageCategory();


?>




<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <div class="card-title ">
                        <h5 class="text-center text-white">Category Table</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class=" table table-bordered">
                        <thead>
                            <th>Sl</th>
                            <th>Category Name</th>
                            <th>Category Title</th>
                            <th>Category Description</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                        <?php foreach ($resourse as $key=> $category_item): ?>
                           <tr>
                               <td><?=$key+1?></td>
                               <td><?=$category_item['category_name']?></td>
                               <td><?=$category_item['category_title']?></td>
                               <td><?=$category_item['category_des']?></td>
                               <td><?=$category_item['pub_status']?></td>
                               <td>
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
