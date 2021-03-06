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
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $sum = $num1 + $num2;
        if ($sum == $num3){
           // echo "math ok";
            $msg = "<p class=\" alert alert-success \">You are not a Robot <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        }else{
            //echo "math is not ok";
            $msg = "<p class=\" alert alert-danger \">Invalid Your Capture <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        }

    }
?>


<div class="wrap shadow">
    <div class="card bg-dark">
        <div class="card-body">
            <h2 style="color: white;">Mathematical Capture</h2>
            <span><?php if (isset($msg)){echo $msg;}?></span>
            <span for="" style="color: white;">Capture: </span>
            <?php
                $num1 = mt_rand(1,9);
                $num2 = mt_rand(1,9);
            ?><span style="color: white;font-size: 18px;font-weight: bold;"><?php echo $num1; echo " + "; echo $num2; ?></span><?php

            ?>
            <form action="" method="POST">
                <div class="form-group">
                    <input name="num1" class="form-control" value="<?php echo $num1;?>" type="hidden">
                    <input name="num2" class="form-control" value="<?php echo $num2;?>" type="hidden">
                    <input name="num3" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input name="insert" class="btn btn-primary" type="submit" value="Capture">
                </div>
            </form>
        </div>
    </div>
</div>








<!-- JS FILES  -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="1.js"></script>

</body>
</html>