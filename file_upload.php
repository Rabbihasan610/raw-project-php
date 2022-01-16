
<?php


$db_con = mysqli_connect("localhost","root","","db_blog");



    $image_size = $_FILES['file_name']['size'];
    if($image_size <=2000000){
        $image_name = $_FILES['file_name']['name'];
        $image_ext = explode('.', $image_name);
        $img_end =end($image_ext);
        $allow_ext = array('jpg','png','jpeg','JPG','PNG','JPEG');
        $Check_allow_ext = in_array($img_end,$allow_ext);
        if ($Check_allow_ext){


                $sql = "INSERT INTO tbl_image (img) VALUES ('location')";
                $form_db = mysqli_query($db_con,$sql);
                $id_form_db =  mysqli_insert_id($db_con);
               $new_name = $id_form_db.".".$img_end;
               $img_upload_loc = "admin/img/" .$new_name;
               $insert_image = move_uploaded_file($_FILES['file_name']['tmp_name'],$img_upload_loc);


               $update_sql = "UPDATE tbl_image SET img='$img_upload_loc' WHERE id=$id_form_db";
               mysqli_query($db_con,$update_sql);


        }else{
            echo "Please insert jpg, png, jpeg";
        }


    }else{
        echo "insert kora jabe na";
    }


    $sql = "SELECT * FROM tbl_image";
    $db_form = mysqli_query($db_con,$sql);



?>





<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select File</th>
            <td><input type="file" name="file_name"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Upload"></td>
        </tr>
    </table>
</form>


<table>
    <tr>
        <th>Gallery Img</th>
    </tr>

    <?php foreach ($db_form as $view_img): ?>
    <tr>
        <td><img src="<?=$view_img['img']?>" alt="" width="100px" height="100px"></td>
    </tr>
    <?php endforeach ?>
</table>
