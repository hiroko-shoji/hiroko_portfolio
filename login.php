<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>


            <div class="jumbotron my-5">
                <h1 class="display-4">WHAT'S NEW</h1>
                <hr class="my-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus nam in reiciendis asperiores ullam distinctio quidem labore, hic quam ipsam.</p>
            </div>
        </div>


        <div class="col-3">

            <div class="jumbotron my-5">

                <h1 class="display-4">Please Login</h1>
                <hr class="my-4">
                <form action="Action.php" method="POST">
                    <div class="form-group">
                        <label for="">Member ID</label>
                        <input type="text" class="form-control" name="memberId">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="pwd">
                    </div>
                    <button type="submit" name="member_login" class="btn btn-info">LOGIN</button>
                </form>

            </div>

        </div>







<?php
    include_once 'footer.php';
?>