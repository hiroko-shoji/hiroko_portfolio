<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>


        <div class="col my-5">

            <h4>Add New Coach</h1>

            <form action="Action.php" method="POST">
                <div class="form-group">
                    <label for="" class="col-sm-3">Coach ID</label>
                    <input type="text" class="col-sm-2 form-control-sm" name="coachId">
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3">Coach Name</label>
                    <input type="text" class="form-control-sm" name="coachName">
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3"></label>
                    <button type="submit" name="add_coach" class="btn btn-success btn-sm">ADD</button>
                </div>

            </form>

            *coach list
        </div>

<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>