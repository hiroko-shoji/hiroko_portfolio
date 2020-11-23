<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>

        </div>

        <div class="col-7">

            <div class="jumbotron my-5">

                <h1 class="display-4">Please Login</h1>
                <hr class="my-4">
                <form action="login_inc.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admin ID</label>
                        <input type="text" class="form-control" required id="" name="memberId">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" required name="password">
                    </div>
                    <button type="submit" name="admin_login" class="btn btn-info">LOGIN</button>
                </form>

            </div>


<?php
    include_once 'footer.php';
?>