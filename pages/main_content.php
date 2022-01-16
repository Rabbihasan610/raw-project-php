<?php
require_once 'vendor/autoload.php';

$application = new \app\Classes\Application();
$result_blog = $application->view_front_blog();


?>






<div class="container  px-lg-5">
    <div class="row text-center">
        <?php foreach ($result_blog  as $blog_item): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-light rounded-3">
                    <img class="card-img-top" src="" alt="fdf">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $blog_item['blog_title']; ?></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, incidunt.</p>
                    </div>
                    <div class="card-footer">
                        <a href="." class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>

        <?php endforeach ?>


    </div>
</div>