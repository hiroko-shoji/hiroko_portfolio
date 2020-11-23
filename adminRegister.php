<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>


        <div class="col">

            <h1 class="display-4">Register New Member</h1>

            <hr class="my-4">
            <form action="Action.php" method="POST">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Member ID</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="memberId">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Full Name</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="fName">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Address</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="address">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="tel">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Email Address</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="email">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Password</label>
                    <input type="password" class="col-sm-5 form-control form-control-sm" name="pwd">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Level</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="level">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Enrolled Class</label>
                    <input type="text" class="col-sm-5 form-control form-control-sm" name="lessonId">
                </div>
                <button type="submit" name="add_member" class="btn btn-primary">ADD</button>
            </form>

<?php
    include_once 'footer.php';
?>