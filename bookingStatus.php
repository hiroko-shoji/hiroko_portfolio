<?php
    include_once 'header.php';
    include_once 'sidebar.php';

    if(!empty($_SESSION['member_id'])){
        $mId = $_SESSION['member_id'];

        $mIdlessonArray = $SchoolObj->display_mId_lesson($mId);
    }else{

    }

?>

        <div class="container my-5">

            <div class="row">
                <div class="col-12">
                    <h4>Your Current Booking Status</h4>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- <form action="Action.php" method="POST"> -->

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Level</th>
                                    <th>Coach</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    if($mIdlessonArray){
                                        foreach($mIdlessonArray as $row){
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="cancelLesson.php?lesson_pk=<?= $row['lesson_pk']?>" class="btn btn-outline-danger btn-sm">Cancel</a>
                                            <a href="replaceLesson.php?lesson_pk=<?= $row['lesson_pk']?>" class="btn btn-outline-primary btn-sm">Replace</a>
                                        </td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['start_time'];?></td>
                                        <td><?php echo $row['level_id'];?></td>
                                        <td><?php echo $row['coach_name'];?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php
                                    }
                                    }else{
                                ?>
                                        <td><?php echo "No lesson found.";?></td>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>

                    <!-- </form> -->

                </div>
            </div>

        </div>


<?php
    include_once 'sidebar2.php';
    include_once 'footer.php';
?>