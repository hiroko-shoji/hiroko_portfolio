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


    <div class="container my-5">
    <!-- Middle container -->

    <div class="row">

        <div class="col-12">

        <h4>Select Booking Date</h4>


            <div class="alert alert-secondary" role="alert">
                Remaining number of lessons: 

                <strong>


                    <?php
                if(!empty($_SESSION['member_id'])){
                    $mId = $_SESSION['member_id'];

                    $count = $SchoolObj->ticket_num($mId);

                    echo $count;


                }
                ?>

                </strong>
            </div>

        </div>
        <!-- end of col-12 -->

    </div>
    <!-- end of row -->



            <div class="row">
            <!-- row for form area -->

                <div class="col-12">

                    <form action="" method="POST">

                        <!-- form- select ticket -->
                        <div class="form-group">
                            <label for="" class="col-sm-5 col-form-label">Please select your Ticket.</label>
                            <select class="form-control-sm" name="selectTicket" id="">

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

                        <!-- form- select level -->
                        <div class="form-group">
                            <label for="" class="col-sm-5 col-form-label">Please select your level.</label>
                            <select class="form-control-sm" name="selectLevel" id="" required>
                                <option value="">-Select-</option>
                                <option value="level1">Beginner</option>
                                <option value="level2">Intermediate</option>
                                <option value="level3">Advanced</option>
                                <option value="level4">Expert</option>
                            </select>
                        </div>

                        <!-- form- select coach -->
                        <div class="form-group">
                            <label for="" class="col-sm-5 col-form-label">Please select your coach.</label>
                            <select class="form-control-sm" name="selectCoach" id="" required>

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
                            <label for="" class="col-sm-5 col-form-label"></label>
                            <button type="submit" name="search" class="btn btn-outline-dark">SEARCH</button>
                        </div>

                    </form>

                </div>
                <!-- end of col-12 -->


            </div>
            <!-- end of row for form area -->

            <div class="row mt-3">
            <!-- row for result table -->

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
                            $sTicket = $_POST['selectTicket'];


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
                                <td><a class="" a href="reserveLesson.php?lesson_pk=<?php echo $row['lesson_pk']?>&useTicket=<?php echo $sTicket; ?>">Reserve</a></td>
                            </tr>

                            <?php
                            }
                            ?>

                        <?php
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
            <!-- end of row for result table -->

    </div>
    <!-- end of middle container -->

</div>
<!-- end of col-7 -->

<!-- not used this time -->
        <div class="col-3">
        <!-- right -->

            <div class="container">
            <!-- test -->

                <div class="row">
                <!-- test -->

                    <!-- <div class="jumbotron my-5"> -->


                        <!-- Remaining number of lessons: -->
                        <!-- <br> -->

                        <?php
                        // if(!empty($_SESSION['member_id'])){
                            // $mId = $_SESSION['member_id'];

                            // $count = $SchoolObj->ticket_num($mId);

                            // echo $count;


                        // }
                        ?>

                    <!-- </div> -->
                    <!-- end of jumbotron -->

                </div>
                <!-- end of test row -->

            </div>
            <!-- end of test container -->

        </div>
        <!-- end of col-3 -->

    </div>
    <!-- end of ROW -->

</div>
<!-- end of CONTAINER -->



<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>