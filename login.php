<?php
    include_once 'header.php';
    include_once 'sidebar.php';


?>

<div class="container">

    <div class="row mt-5">

        <div class="jumbotron mx-auto my-auto">
                <form action="Action.php" method="POST">
                <div class="media justify-content-center">
                    <img src="tennis_PNG10395.png" alt="Avatar">
                </div>
                <h2 class="text-center">Member Login</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="memberId" placeholder="Member ID" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn btn-block" name="member_login">LOGIN</button>
                </div>
            </form>
        </div>

    </div>

</div>


    </div>



        <div class="col-3">

        </div>







<?php
    include_once 'footer.php';
?>