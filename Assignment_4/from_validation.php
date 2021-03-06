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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $roll = $_POST['roll'];
        $age = $_POST['age'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        /*
         * Name
         * Email
         * Cell
         * Roll
         * age
         */

        if (empty($name)){
            $error_name= "* Name fields is required";
        }
        if(empty($email)){
            $error_email= "* Email fields is required";
        }
        if(empty($cell)){
            $error_cell= "* Mobile Number fields is required";
        }
        if(empty($roll)){
            $error_roll= "* Roll fields is required";
        }
        if(empty($age)){
            $error_age = "* age fields is required";
        }


        // all required
        if (empty($name) && empty($email) && empty($cell) && empty($roll)){
            $error_alls= "<p class=\" alert alert-danger \">* All fields are required<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
        } else{
            // Specific email validation
            $sa = explode("@",$email);
            $s_email = end($sa);
            if ($s_email === "diu.edu.bd"){

                //number validation.....
                $num = ['017','013','019','014','015','016','018'];
                $v_cell = substr($cell,0,3);
                if (in_array($v_cell, $num)==true){

                    // Age validation......
                    if ($age >= 18 && $age <= 40){

                        //Capture validation......
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $num3 = $_POST['num3'];
                        $sum = $num1 + $num2;
                        if ($sum == $num3){
                            $error_alls= "<p class=\" alert alert-success \">Data Save Success<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
                        }else{
                            $c_error = "Wrong captcha. Try again.";
                        }
                    }elseif ($age <= 17){
                        //  echo " too young";
                        $error_age = "You Are Too Young";
                    }
                    elseif ($age >= 40){
                        //  echo "too Older";
                        $error_age = "You Are Too Older";
                    }
                    else {
                        //  echo "age not ok";
                    }
                }else{
                    $error_all = "! Invalid your mobile number";
                }
            }
            else{
                $error_email = "You Must be Daffodil Student Mail";
            }
        }








    }


?>


<div class="wrap shadow">
    <div class="card bg-dark">
        <div class="card-body">
            <h2 style="color: white;">Add New Student</h2>
            <span style="color: red"><?php if(isset($error_alls)){echo $error_alls;}?></span>
            <span style="color: green"><?php if(isset($s)){echo $s;}?></span>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="" style="color: white;">Name</label>
                    <input name="name" class="form-control" type="text" value="<?php if (isset($name)){echo $name;}?>">
                    <span style="color: red"><?php if(isset($error_name)){echo $error_name;}?></span>
                </div>
                <div class="form-group">
                    <label for="" style="color: white;">Email</label>
                    <input name="email" class="form-control" type="text" value="<?php if (isset($email)){echo $email;}?>">
                    <span style="color: red"><?php if(isset($error_email)){echo $error_email;}?></span>
                </div>
                <div class="form-group">
                    <label for="" style="color: white;">Mobile Number</label>
                    <input name="cell" class="form-control" type="text" value="<?php if (isset($cell)){echo $cell;}?>">
                    <span style="color: red"><?php if(isset($error_cell)){echo $error_cell;}?></span>
                </div>
                <div class="form-group">
                    <label for="" style="color: white;">Roll</label>
                    <input name="roll" class="form-control" type="text" value="<?php if (isset($roll)){echo $roll;}?>">
                    <span style="color: red"><?php if(isset($error_roll)){echo $error_roll;}?></span>
                </div>
                <div class="form-group">
                    <label for="" style="color: white;">Age</label>
                    <input name="age" class="form-control" type="text" value="<?php if (isset($age)){echo $age;}?>">
                    <span style="color: red"><?php if(isset($error_age)){echo $error_age;}?></span>
                </div>
                <div class="form-group">
                    <span for="" style="color: white;">Capture : </span>
                    <?php
                    $num1 = mt_rand(1,9);
                    $num2 = mt_rand(1,9);
                    ?><span style="color: white;font-size: 18px;font-weight: bold;"><?php echo $num1; echo " + "; echo $num2; ?></span><?php

                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input name="num1" class="form-control" value="<?php echo $num1;?>" type="hidden">
                            <input name="num2" class="form-control" value="<?php echo $num2;?>" type="hidden">
                            <input name="num3" class="col-2" type="text"><br>
                            <span style="color: red"><?php if (isset($c_error)){echo $c_error;}?></span>
                        </div>
                </div>
                <div class="form-group">
                    <input name="insert" class="btn btn-primary" type="submit" value="Insert">
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
</body>
</html>