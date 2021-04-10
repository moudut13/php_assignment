<?php
    include_once "db-config.php";

    /*
    * Message function Start
    */
    function valid($msg,$type = 'danger'){
        return "<div class=\"alert alert-$type alert-dismissible fade show\" role=\"alert\"><strong>$msg!</strong><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>";
    }
/*
 * Message function End
 */

/*
 * INSERT Function....
 */

function create($sql){
    global $config;
    $config->query($sql);
}
/*
 * Images Upload and Images Unique Name
 */
function imageUnique($photo,$img_loc='assets/images/'){
    $image_photo = $photo['name'];
    $image_tmp = $photo['tmp_name'];
    $exp = explode('.',$image_photo);
    $photo_ext = end($exp);
    $unique = md5(rand(1,99999).time()).".".$photo_ext;
    move_uploaded_file($image_tmp,$img_loc.$unique);
    return $unique;
}

/*
 * Total Row Show Function
 */
function showRow($table){
    global $config;
    $sql = "SELECT * FROM $table";
    $result = $config->query($sql);
    $rows = $result->num_rows;
    return $rows;
}

/*
 * Show All Table data Function
 */
function showData($table){
    global $config;
    $sql = "SELECT * FROM $table ORDER BY id DESC";
    return $config->query($sql);
}

/*
 * Show Data and Limit Function
 */
function limitData($table,$limit){
    global $config;
    $sql = "SELECT * FROM $table LIMIT $limit OFFSET 0";
    $result = $config->query($sql);
    return $result;
}

function trashFunction($table,$trash){
    global $config;
    $id = $trash;
    global $config;
    if ($table == 'students'){
        $sql = "UPDATE students SET status='Inactive' WHERE id=$id";
        $config->query($sql);
    }
    if ($table == 'trachers'){
        $sql = "UPDATE trachers SET status='Inactive' WHERE id=$id";
        $config->query($sql);
    }
    if ($table == 'staff'){
        $sql = "UPDATE staff SET status='Inactive' WHERE id=$id";
        $config->query($sql);
    }
    header("location: trash.php");
}

function Restore($table,$ids){
    global $config;
    $id = $ids;
    if ($table == 'students'){
        $sql = "UPDATE students SET status='Active' WHERE id=$id";
        $config->query($sql);
    }
    elseif ($table == 'trachers'){
        $sql = "UPDATE trachers SET status='Active' WHERE id=$id";
        $config->query($sql);
    }
    elseif ($table == 'staff'){

        $sql = "UPDATE staff SET status='Active' WHERE id=$id";
        $config->query($sql);
    }
    header("location:index.php");
}


function singleDataView($table,$id){
    global $config;
    $id = $id;
    if ($table == 'students'){
        $sql = "SELECT * FROM students WHERE id = '$id'";
        $result = $config->query($sql);
        return $row = $result->fetch_object();
    }
    elseif ($table == 'trachers'){
        $sql = "SELECT * FROM trachers WHERE id = '$id'";
        $result = $config->query($sql);
        return $row = $result->fetch_object();
    }
    elseif ($table == 'staff'){
        $sql = "SELECT * FROM staff WHERE id = '$id'";
        $result = $config->query($sql);
        return $row = $result->fetch_object();
    }
}

function upDate($table,$id){
    $sql = "UPDATE $table SET name='' ,email = '',cell = '',location = '' WHERE id='$id'";
}



function studentUpdate($edits){
    global $config;
    $edit= $edits;
    $sql = "SELECT * FROM students WHERE id = $edit";
    $result = $config->query($sql);
    if ($row = $result->fetch_object()){

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $location = $_POST['location'];
            $table = "students";
            $sql = "UPDATE  $table SET name = '$name',email= '$email',cell= '$cell',location = '$location' WHERE id= $edit";
            create($sql);
            //$msg = validation('Data Save', 'success');
            header('location:index.php');
            //return $msg;
        }
    }
    return $row;
}



function tUpdate($edits){
    global $config;
    $edit= $edits;
    $sql = "SELECT * FROM trachers WHERE id = $edit";
    $result = $config->query($sql);
    if ($row = $result->fetch_object()){

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $table = "trachers";
            $sql = "UPDATE  $table SET name = '$name',email= '$email',cell= '$cell' WHERE id= $edit";
            create($sql);
            //$msg = validation('Data Save', 'success');
            header('location:index.php');
            //return $msg;
        }
    }
    return $row;
}



function staffDataUp($edits){
    global $config;
    $edit= $edits;
    $sql = "SELECT * FROM staff WHERE id = $edit";
    $result = $config->query($sql);
    if ($row = $result->fetch_object()){

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $table = "staff";
            $sql = "UPDATE  $table SET name = '$name',email= '$email',cell= '$cell' WHERE id= $edit";
            create($sql);
            //$msg = validation('Data Save', 'success');
            header('location:index.php');
            //return $msg;
        }
    }
    return $row;
}