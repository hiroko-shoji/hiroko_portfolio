<?php
include 'Action.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ea1f6cc0cd.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <?php
            if(isset($_SESSION['member_name'])){
                $member = $_SESSION['member_name'];
            ?>

            <a class="navbar-brand" href="welcome.php">YH Tennis School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a href=""></a>
            </div>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="shopping.php"><i class="fas fa-shopping-bag"></i> SHOPPING</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Welcome $member" ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Cart</a>
                            <a class="dropdown-item" href="#">Payment History</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="logout.php">LOG OUT</a>
                        </div>
                    </li>

            <?php
            } else {
            ?>

            <a class="navbar-brand" href="login.php">YH Tennis School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a href=""></a>
            </div>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav ">

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">LOGIN</a>
                    </li>
<?php
}
?>
                </ul>
            </div>
            <!-- end of collapse -->
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of nav -->


<!-- begginng of the middle part -->

    <div class="container">
    <!-- CONTAINER supposed to be cloesed in sidebar2.php -->

        <div class="row">
        <!-- ROW supposed to be cloesed in sidebar2.php -->

            <div class="col-3 my-5">
            <!-- left -->