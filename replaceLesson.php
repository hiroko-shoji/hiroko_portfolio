<?php
    include_once 'header.php';
    include_once 'sidebar.php';

if(!empty($_SESSION['member_id'])){
    $lessonPk = $_GET['lesson_pk'];
    $mId = $_SESSION['member_id'];

    $lessonData = $SchoolObj->get_reserved_lesson($lessonPk);

}else{
    echo "test";
}

?>

    <div class="col my-5">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    Replace?
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="Action.php" method="POST">

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Date</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Coach Name</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="hidden" name="lessonId" value="<?php echo $lessonData['lesson_id'];?>"><?php echo $lessonData['lesson_id'];?></td>
                                    <td><input type="hidden" name="lessonDate" value="<?php echo $lessonData['date'];?>"><?php echo $lessonData['date'];?></td>
                                    <td><input type="hidden" name="lessonDay" value="<?php echo $lessonData['day'];?>"><?php echo $lessonData['day'];?></td>
                                    <td><input type="hidden" name="startTime" value="<?php echo $lessonData['start_time'];?>"><?php echo $lessonData['start_time'];?></td>
                                    <td><input type="hidden" name="coachId" value="<?php echo $lessonData['coach_id'];?>"><?php echo $lessonData['coach_name'];?></td>
                                    <td><input type="hidden" name="level" value="<?php echo $lessonData['level_id'];?>"><?php echo $lessonData['level_id'];?></td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" name="mId" value="<?php echo $mId; ?>">
                        <input type="hidden" name="lessonPk" value="<?php echo $lessonData['lesson_pk'];?>">
                        <input type="hidden" name="endTime" value="<?php echo $lessonData['end_time'];?>">
                        <input type="submit" name="replace" value="Replace" class="btn btn-primary">
                    </form>

                </div>
            </div>



        </div>
    </div>



<?php
    include_once 'footer.php';
?>