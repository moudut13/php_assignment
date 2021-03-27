<?php
    include_once "autoload.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php

    if (isset($_GET['edit'])){
        $row = Update($_GET['edit']);
    }
    ?>
    <meta charset="UTF-8">
    <title>Edit | <?php echo $row->name?></title>
    <link rel="icon" href="assets/media/img/fav.png" type="image/gif" sizes="16x16">
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="container-fluid">
        <div class="col-lg-6 mx-auto ">
            <br>
            <br>
            <div><a href="index.php" class="btn btn-primary btn-2 mb-3">Dashboard</a></div>
            <div class="shadow p-3 mb-5 bg-white rounded">

                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Student Name</label>
                        <input name="name" class="form-control" type="text" value="<?php echo $row->name?>">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text" value="<?php echo $row->email?>">
                    </div>


                    <div class="form-group">
                        <label for="">Cell</label>
                        <input name="cell" class="form-control" type="text" value="<?php echo $row->cell?>">
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="username" class="form-control" type="text" value="<?php echo $row->username?>">
                    </div>

                    <div class="form-group">
                        <label for="">Location</label>
                        <select class="form-control" name="location" id="">
                            <option value="">-select-</option>
                            <option value="Mirpur" <?php echo ($row->location == 'Mirpur')? 'selected': '';?> >Mirpur</option>
                            <option value="Banani" <?php echo ($row->location == 'Banani')? 'selected': '';?> >Banani</option>
                            <option value="Uttara" <?php echo ($row->location == 'Uttara')? 'selected': '';?> >Uttara</option>
                            <option value="Mohammadpur" <?php echo ($row->location == 'Mohammadpur')? 'selected': '';?> >Mohammadpur</option>
                            <option value="Badda" <?php echo ($row->location == 'Badda')? 'selected': '';?> >Badda</option>
                            <option value="Gualshan" <?php echo ($row->location == 'Gualshan')? 'selected': '';?> >Gualshan</option>
                            <option value="Dhanmondi" <?php echo ($row->location == 'Dhanmondi')? 'selected': '';?> >Dhanmondi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" type="text" value="<?php echo $row->age?>">
                    </div>

                    <div class="form-group">
                        <label for="">Gender</label> <br>
                        <input name="gender" type="radio" <?php echo ($row->gender == 'Male')? 'checked': '';?> value="Male" id="Male"> <label for="Male">Male</label>
                        <input name="gender" type="radio" <?php echo ($row->gender == 'Female')? 'checked': '';?> value="Female" id="Female"> <label for="Female">Female</label>
                    </div>

                    <div class="form-group">
                        <label for="">Dept</label>
                        <select class="form-control" name="dept" id="">
                            <option value="">-select-</option>
                            <option value="BBA" <?php echo ($row->dept == 'BBA')? 'selected': '';?> >BBA</option>
                            <option value="EEE" <?php echo ($row->dept == 'EEE')? 'selected': '';?> >EEE</option>
                            <option value="CSE" <?php echo ($row->dept == 'CSE')? 'selected': '';?> >CSE</option>
                            <option value="English" <?php echo ($row->dept == 'English')? 'selected': '';?> >English</option>
                            <option value="Bangla" <?php echo ($row->dept == 'Bangla')? 'selected': '';?> >Bangla</option>
                            <option value="IT" <?php echo ($row->dept == 'IT')? 'selected': '';?> >IT</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Profile Photo</label> <br>
                        <img id="load_student_photo" style="max-width:100% ;" src="" alt="">
                        <br>
                        <label for="student_photo"> <img width="100px" id="view_photo" src="assets/media/img/up.png"
                                alt=""></label>
                        <input name="photo" id="student_photo" style="/*display:none;*/" class="form-control" type="file" value="<?php echo $row->photo?>">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input name="stc" class="btn btn-primary" type="submit" value="Update student">
                    </div>
                    <br>
                    <br>
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