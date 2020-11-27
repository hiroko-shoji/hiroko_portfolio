<?php
if(isset($_SESSION['member_id'])){
    $member = $_SESSION['member_id'];

    if($member!='admin'){
?>

            <div class="list-group">
                <a href="lessonBookings.php" class="list-group-item list-group-item-action">Lesson Bookings</a>
                <a href="bookingStatus.php" class="list-group-item list-group-item-action">Booking Status</a>
                <a href="#" class="list-group-item list-group-item-action">Reserve Court</a>
                <a href="#" class="list-group-item list-group-item-action">Event</a>
            </div>

        </div>
        <!-- end of col-2 -->

        <div class="col-6">
        <!-- Middle -->


<?php
    }else{
?>

            <div class="list-group">
                <a href="lessonBookings.php" class="list-group-item list-group-item-action">Lesson Bookings</a>
                <a href="bookingStatus.php" class="list-group-item list-group-item-action">Booking Status</a>
                <a href="#" class="list-group-item list-group-item-action">Reserve Court</a>
                <a href="#" class="list-group-item list-group-item-action">Event</a>
                <br>

                <!-- Sidebar for Admin -->
                <a href="adminRegister.php" class="list-group-item list-group-item-action">Register New Member</a>
                <a href="adminCoach.php" class="list-group-item list-group-item-action">Register New Coach</a>
                <a href="#" class="list-group-item list-group-item-action">Manage Members</a>
                <a href="adminLesson.php" class="list-group-item list-group-item-action">Manage Regular Lessons</a>
                <a href="#" class="list-group-item list-group-item-action">Manage Events</a>
                <a href="adminNews.php" class="list-group-item list-group-item-action">Manage News</a>
                <a href="#" class="list-group-item list-group-item-action">Manage Products</a>
            </div>


        </div>
        <!-- end of col-2 -->

        <div class="col-6">
        <!-- Middle -->


<?php
    }
}else{
?>
        </div>
        <!-- end of col-2 -->

        <div class="col-6">
        <!-- Middle -->

<?php
}
?>