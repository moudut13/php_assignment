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
        $ran_num = rand(1,99);
        $ran_2num = $ran_num*16;
        $ran_md5_num = md5($ran_2num);
        $str = substr($ran_md5_num,1,6);
        if (isset($_POST['submit'])){
            $input = $_POST['name1'];
            $input2 = $_POST['num1'];
            $str1 = "10b";
            if ($input2 == $input){
                //echo "ok";
                $msg = "<p class=\" alert alert-success \">You are not a Robot <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
            }else{
                //echo "not ok";
                $msg = "<p class=\" alert alert-danger \">Invalid Your Capture <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
            }
        }
?>
<div class="wrap shadow">
    <div class="card" style="background: #8483e9;">
        <div class="card-body">
            <h2 style="color: white;">Custom String Capture</h2>
            <span><?php if (isset($msg)){echo $msg;}?></span>
            <span for="" style="color: white;">String Capture: </span>
            <?php echo "<h5 style='color: white;display: inline-block;background: url(image/10.jfif); background-repeat: no-repeat;background-size: cover; opacity: 70%;'>$str</h5>";?>
            <form action="" method="POST">
                <div>
                    <input name="num1" value="<?php echo $str;?>"style="display: none;">
                </div>
                <div class="form-group">
                    <label style="color: white">Not a Robot : </label>
                    <input class="col-4" type="text" name="name1">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" name="submit" value="Capture" type="submit">
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