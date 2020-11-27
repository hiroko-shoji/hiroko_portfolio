<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>


        <div class="col my-5">

                <h4>Add Lessons</h4>

                    <form action="Action.php" method="POST">
                        <div class="form-group">
                            <label for="" class="col-sm-3">Lesson ID</label>
                            <input type="text" class="form-control-sm" name="lessonId">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3">Date</label>
                            <input type="date" class="form-control-sm" name="lessonDate">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3">Day</label>
                            <select name="lessonDay" id="" class="form-control-sm">
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
                            <label for="" class="col-sm-3">Start Time</label>
                            <input type="time" class="form-control-sm" name="startTime">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3">End Time</label>
                            <input type="time" class="form-control-sm" name="endTime">
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3">Coach ID/Name</label>
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
                            <label for="" class="col-sm-3">Level</label>
                            <input type="text" class="form-control-sm" name="level">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3"></label>
                            <button type="submit" name="add_lesson" class="btn btn-success">ADD</button>
                        </div>

                    </form>


            *lesson list
            </div>
        </div>
    </div>

<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>