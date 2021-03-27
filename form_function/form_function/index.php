<?php
    include_once "autoload.php";
    if (isset($_GET['delete'])){
        delete($_GET['delete']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
    <link rel="icon" href="assets/media/img/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <?php
        if (isset($_POST['stc'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cell = $_POST['cell'];
            $username = $_POST['username'];
            $location = $_POST['location'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $dept = $_POST['dept'];
            if (empty($name) || empty($email)){
                $msg = validation('All fields are required');
            }elseif (filter_var($email,FILTER_VALIDATE_EMAIL)== false){
                $msg = validation("Invalid Your Email");
            }
            else{
                $photo = move($_FILES['photo']);
                $table = "students_info";
                $sql = "INSERT INTO $table (name,email,cell,username,location,age,gender,dept,photo) VALUES ('$name','$email','$cell','$username','$location','$age','$gender','$dept','$photo')";
                create($sql);
                $msg = validation('Data Save','success');
            }
        }
    ?>
	<div class="wrap-table ">
		<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_student_modal">Add new student</a>
		<br>
		<br>
        <?php if (isset($msg)){echo $msg;}?>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>User Name</th>
							<th>Location</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $sql = "SELECT * FROM students_info ORDER BY id DESC";
                            $result = $conn-> query($sql);
                            $n = 1;
                            while ($row = $result->fetch_object()):

                        ?>
						<tr>
							<td><?php if (isset($n)){$n;echo $n++;}?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->email?></td>
							<td><?php echo $row->cell?></td>
							<td><?php echo $row->username?></td>
							<td><?php echo $row->location?></td>
							<td><img src="photo/<?php echo $row->photo?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="view.php?view=<?php echo $row->id?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?edit=<?php echo $row->id?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete=<?php echo $row->id;?>&&photo=<?php echo $row->photo?>">Delete</a>
							</td>
						</tr>
                    <?php
                        endwhile;
                    ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	
	<div id="add_student_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Add new student</h3>
				</div>
				<div class="modal-body">
					<form action="" method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label for="">Student Name</label>
							<input name="name" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text">
						</div>


						<div class="form-group">
							<label for="">Cell</label>
							<input name="cell" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Username</label>
							<input name="username" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Location</label>
							<select class="form-control" name="location" id="">
								<option value="">-select-</option>
								<option value="Mirpur">Mirpur</option>
								<option value="Banani">Banani</option>
								<option value="Uttara">Uttara</option>
								<option value="Mohammadpur">Mohammadpur</option>
								<option value="Badda">Badda</option>
								<option value="Gualshan">Gualshan</option>
								<option value="Dhanmondi">Dhanmondi</option>
							</select>
						</div>

						<div class="form-group">
							<label for="">Age</label>
							<input name="age" class="form-control" type="text">
						</div>

	  					<div class="form-group">
							<label for="">Gender</label> <br>
							<input name="gender" type="radio" checked value="Male" id="Male"> <label for="Male">Male</label>
							<input name="gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
						</div>

						<div class="form-group">
							<label for="">Dept</label>
							<select class="form-control" name="dept" id="">
								<option value="">-select-</option>
								<option value="BBA">BBA</option>
								<option value="EEE">EEE</option>
								<option value="CSE">CSE</option>
								<option value="English">English</option>
								<option value="Bangla">Bangla</option>
								<option value="IT">IT</option>
							</select>
						</div>

						<div class="form-group">
							<label for="">Profile Photo</label> <br>
							<img id="load_student_photo" style="max-width:100% ;" src="" alt="">
							<br>
							<label for="student_photo"> <img width="100px" id="view_photo" src="assets/media/img/up.png" alt=""></label>
							<input name="photo" id="student_photo" style="display:none;" class="form-control" type="file">
						</div>
						<div class="form-group">
							<label for=""></label>
							<input name="stc" class="btn btn-primary" type="submit" value="add student">
						</div>
					</form>
				</div>
				<div class="modal-footer"></div>
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