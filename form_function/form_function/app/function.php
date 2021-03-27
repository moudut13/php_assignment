<?php
include_once "db_config.php";

/*
 * Insert function
 */
function Create($sql){
      global $conn;
      $conn->query($sql);
}
/*
 * File Upload and save function
 */
function move($photo){
    $photo_name = $photo['name'];
    $temp = $photo['tmp_name'];
    $photo_name = $_FILES['photo']['name'];
    $photo_arr = explode('.',$photo_name);
    $txt = end($photo_arr);
    $quine_name = md5(rand(1,999999).time()).".".$txt;
    move_uploaded_file($temp,"photo/".$quine_name);
    return $quine_name;

}
function Show($show){
    global $conn;
    $view = $show;
    $sql = "SELECT * FROM students_info WHERE id= $view";
    $result = $conn->query($sql);
    if ($row= $result->fetch_object()){
        return $row;
    }
}
function Update(){
    global $conn;
    $edit = $_GET['edit'];
    $sql = "SELECT * FROM students_info WHERE id = $edit";
    $result = $conn->query($sql);
    if ($row = $result->fetch_object()){

        if (isset($_POST['stc'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $username = $_POST['username'];
            $location = $_POST['location'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $dept = $_POST['dept'];

            $photo = move($_FILES['photo']);
            $table = "students_info";
            $sql = "UPDATE  $table SET name = '$name',email= '$email',cell= '$cell',username = '$username',location = '$location',age = '$age',gender = '$gender',dept='$dept',photo='$photo'WHERE id= $edit";
            create($sql);
            $msg = validation('Data Save', 'success');
            header('location:index.php');
        }
    }
    return $row;
}
/*
 * delete function
 */
function delete($delete){
    global $conn;
    if (isset($delete)){
        $id = $delete;
        $photo = $_GET['photo'];
        $sql = "DELETE FROM students_info WHERE id=$id";
        if ($conn->query($sql)){
            unlink('photo/'.$photo);
            header('location:index.php');
        }}
}
/*
 * message function
 */
function validation($msg,$type = 'danger'){
    return "<p class=\" alert alert-$type \">$msg<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}
