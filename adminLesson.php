<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>

    <div class="col my-5">

    <div class="container">
        <div class="row">

            <div class="col-8">
                Add Lessons

            <hr class="my-4">
            <form action="Action.php" method="POST">
                <div class="form-group">
                    <label for="">Lesson ID</label>
                    <input type="text" class="form-control" name="lessonId">
                </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="lessonDate">
                </div>
                <div class="form-group">
                    <label for="">Day</label>
                    <select name="lessonDay" id="" class="form-control">
                        <option value=""></option>
                        <option value="mon">Mon</option>
                        <option value="tue">Tue</option>
                        <option value="wed">Wed</option>
                        <option value="thu">Thu</option>
                        <option value="fri">Fri</option>
                        <option value="sat">Sat</option>
                        <option value="sun">Sun</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Start Time</label>
                    <input type="time" class="form-control" name="startTime">
                </div>
                <div class="form-group">
                    <label for="">End Time</label>
                    <input type="time" class="form-control" name="endTime">
                </div>

                <div class="form-group">
                    <label for="">Coach ID/Name</label>
                    <select name="coachId" id="">

                        <?php
                            $database_row = $SchoolObj->display_all_coach();

                            foreach($database_row as $row){
                        ?>
                                <option value="<?php echo $row['coach_id']; ?>"><?php echo $row['coach_name']; ?></option>

                        <?php
                            }
                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" class="form-control" name="level">
                </div>
                <button type="submit" name="add_lesson" class="btn btn-primary">ADD</button>
            </form>


            *lesson list

<?php
    include_once 'footer.php';
?>