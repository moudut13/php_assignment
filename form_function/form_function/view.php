<?php
include_once "autoload.php";
?>
<!DOCTYPE>
<html>

<head>
    <?php
    if (isset($_GET['view'])){
        $row = show($_GET['view']);
    }
    ?>
    <meta charset="UTF-8">
    <title><?php echo $row->name." | ".$row->id?></title>
    <!-- ALL CSS FILES  -->
    <link rel="icon" href="assets/media/img/fav.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 mx-auto">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="card">
                        <img class="card-img-top"  src="photo/<?php echo $row->photo?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title h2 font-weight-bold text-capitalize">Name : <?php echo $row->name?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">ID : <?php echo $row->id?></li>
                            <li class="list-group-item">Email : <?php echo $row->email?></li>
                            <li class="list-group-item">Cell : <?php echo $row->cell?></li>
                            <li class="list-group-item">User Name : <?php echo $row->username?></li>
                            <li class="list-group-item">Location : <?php echo $row->location?></li>
                            <li class="list-group-item">Gender : <?php echo $row->gender?></li>
                            <li class="list-group-item">Department : <?php echo $row->dept?></li>
                            <li class="list-group-item">Status : <?php echo $row->status?></li>
                        </ul>
                        <div class="card-body">
                            <a href="index.php" class="btn btn-primary btn-3">back</a>
                        </div>
                    </div>
                </div>
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