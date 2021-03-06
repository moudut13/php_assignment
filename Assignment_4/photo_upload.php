<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<?php
    if (isset($_POST['insert'])){
        $img = $_FILES['image'];

        $name = $img['name'];
        $type = $img['type'];
        $t_name = $img['tmp_name'];
        $size = $img['size'];
        $error = $img['error'];

        //Unique name
        $n_name = explode(".",$name);
        $new_name = end($n_name);
        $i_name = time().rand(1,999999);
        $name_md5 = md5($i_name).".".$new_name ;

        //File validation....
        if (empty($name)){
            $msg = "<p class=\" alert alert-danger \">Please Select Your File<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        }else{

            //type validation......
            if ($type == "image/jpeg" || $type == "image/png"){

                //Size validation....
                $n_size = $size/1000;
                $expect_size = 500;
                if ($n_size <= $expect_size){

                    //File Save To Folder....
                    if(empty($error)==true){
                        move_uploaded_file($t_name,"img/".$name_md5);
                        $msg = "<p class=\" alert alert-success \">File Upload Success<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                    }else{

                        //error message....
                        $error;
                    }
                }else{
                    //error message....
                    $msg = "<p class=\" alert alert-danger \">File Size Too Large<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                }
            }else{
                //error message....
                $msg = "<p class=\" alert alert-danger \">Invalid Your Format<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
            }
        }


        //echo "<pre>";
        //print_r($img);


    }
?>
<div class="wrap shadow">
    <div class="card" style="background: #8483e9;">
        <div class="card-body">
            <h2 style="color: white;">Student Photo Upload</h2>
            <h6 style="color: white;">format JPG or PNG</h6>
            <span><?php if (isset($msg)){echo $msg;} //if (isset($error)){echo $error;}?></span>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="files" style="cursor: pointer"><img data-toggle="tooltip" data-placement="left" title="Profile Photo" src="image/2.png" alt="" style="width: 100px;height: 100px;"></label>
                    <input name="image" class="form-control"; type="file" id="files" style="display: none;">
                    <span><img id="view_photo" src="" alt="" style="margin-left: 20px;border-radius: 100%;max-width: 150px;"></span>
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                    <input name="insert" class="btn btn-primary" type="submit" value="Upload">
                </div>
            </form>
        </div>
    </div>
</div>








<!-- JS FILES  -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });


    $('input[name="image"]').change(function (e){
        let file_url = URL.createObjectURL(e.target.files[0]);
        $('img#view_photo').attr('src',file_url);
    });
    
    
</script>

</body>
</html>