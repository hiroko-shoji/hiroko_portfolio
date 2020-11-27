<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>


        <div class="col my-5">

            <h4>Register New Member</h4>

            <form action="Action.php" method="POST">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Member ID</label>
                    <input type="text" class="col-sm-2 form-control-sm" name="memberId">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Full Name</label>
                    <input type="text" class="col-sm form-control-sm" name="fName">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Address</label>
                    <input type="text" class="col-sm form-control-sm" name="address">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Phone Number</label>
                    <input type="text" class="col-sm-5 form-control-sm" name="tel">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Email Address</label>
                    <input type="text" class="col-sm form-control-sm" name="email">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Password</label>
                    <input type="password" class="col-sm form-control-sm" name="pwd">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Level</label>
                    <select name="level" id="" class="form-control-sm">
                        <option value="">-Select-</option>
                        <option value="level1">Beginner</option>
                        <option value="level2">Intermediate</option>
                        <option value="level3">Advanced</option>
                        <option value="level4">Expert</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Enrolled Class</label>
                    <input type="text" class="col-sm-2 form-control-sm" name="lessonId">
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"></label>
                    <button type="submit" name="add_member" class="btn btn-success">ADD</button>
                </div>

            </form>

        </div>

<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>