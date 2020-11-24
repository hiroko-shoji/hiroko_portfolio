<?php
    include_once 'header.php';
    include_once 'sidebar.php';

    if(!empty($_SESSION['member_id'])){
        $mId = $_SESSION['member_id'];

        $ticket_row = $SchoolObj->display_all_ticket($mId);
    }else{
        echo "No ticket";
    }


?>

    <div class="col my-5">

        <div class="container">
            <div class="row">

                <div class="col-12">
                    Select Booking Date

                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Please select your Ticket.</label>
                            <select class="form-control" name="selectTicket" id="">

                                <?php

                                    $ticket_row = $SchoolObj->display_all_ticket($mId);

                                    foreach($ticket_row as $row){
                                ?>
                                        <option value="<?php echo $row['ticket_id'] ?>"><?php echo $row['lesson_id']." ".$row['date']." ".$row['type']; ?></option>

                                <?php
                                    }
                                ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Please select your level.</label>
                            <select class="form-control" name="selectLevel" id="" required>
                                <option value="">-Select-</option>
                                <option value="level1">Beginner</option>
                                <option value="level2">Intermediate</option>
                                <option value="level3">Advanced</option>
                                <option value="level4">Expert</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Please select your coach.</label>
                            <select class="form-control" name="selectCoach" id="" required>

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
                        <button type="submit" name="search" class="btn btn-outline-dark">SEARCH</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Coach Name</th>
                                <th>Level</th>
                                <th>Options</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php

                        if(isset($_POST['search'])){

                            $sLevel = $_POST['selectLevel'];
                            $sCoach = $_POST['selectCoach'];
                            // $sTicket = $_POST['selectTicket']

                            $SchoolObj->search_lesson($sLevel,$sCoach);

                            $lessonArray = $SchoolObj->search_lesson($sLevel,$sCoach);

                            if($lessonArray){
                                foreach($lessonArray as $row){
                        ?>

                            <tr>
                                <td><?php echo $row['lesson_id']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['day']; ?></td>
                                <td><?php echo $row['start_time']; ?></td>
                                <td><?php echo $row['coach_name']; ?></td>
                                <td><?php echo $row['level_id']; ?></td>
                                <td><a class="" a href="reserveLesson.php?lesson_pk=<?php echo $row['lesson_pk']; ?>">Reserve</a></td>
                            </tr>
                        <?php
                            }
                        }else{
                            echo "No result found.";
                        }
                        ?>
                        </tbody>
                    </table>

                    <?php
                    }
                    ?>

                </div>
            </div>

        </div>
    </div>


<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>