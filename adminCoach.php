<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>


        <div class="col">

            <h1 class="display-4">Coach</h1>

            <hr class="my-4">
            <form action="Action.php" method="POST">
                <div class="form-group">
                    <label for="">Coach ID</label>
                    <input type="text" class="form-control" name="coachId">
                </div>
                <div class="form-group">
                    <label for="">Coach Name</label>
                    <input type="text" class="form-control" name="coachName">
                </div>
                <button type="submit" name="add_coach" class="btn btn-primary">ADD</button>
            </form>

            *coach list
<?php
    include_once 'footer.php';
?>