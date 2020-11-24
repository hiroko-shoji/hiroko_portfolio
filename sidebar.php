<?php
if(isset($_SESSION['member_id'])){
    $member = $_SESSION['member_id'];

    if($member!='admin'){
?>
            <div class="my-5">
                <a href="lessonBookings.php" class="text-decoration-none">Lesson Bookings</a><br>
                <a href="bookingStatus.php" class="text-decoration-none">Booking Status</a><br>
                <a href="#" class="text-decoration-none">Reserve Court</a><br>
                <a href="#" class="text-decoration-none">Event</a><br>
                <a href="#" class="text-decoration-none">Email Settings</a><br>
                <a href="#" class="text-decoration-none">Change Password</a><br>
                <a href="#" class="text-decoration-none">Contact Us</a><br>
            </div>

        </div>

        <div class="col-7">


<?php
    }else{
?>
            <div class="my-5">
                <a href="lessonBookings.php" class="text-decoration-none">Lesson Bookings</a><br>
                <a href="bookingStatus.php" class="text-decoration-none">Booking Status</a><br>
                <a href="#" class="text-decoration-none">Reserve Court</a><br>
                <a href="#" class="text-decoration-none">Event</a><br>
                <a href="#" class="text-decoration-none">Email Settings</a><br>
                <a href="#" class="text-decoration-none">Change Password</a><br>
                <a href="#" class="text-decoration-none">Contact Us</a><br>
                <br>
                <!-- Sidebar for Admin -->
                <a href="adminRegister.php" class="text-decoration-none">Register New Member</a><br>
                <a href="adminCoach.php" class="text-decoration-none">Register New Coach</a><br>
                <a href="adminAllMembers.php" class="text-decoration-none">Manage Members</a><br>
                <a href="adminLesson.php" class="text-decoration-none">Manage Regular Lessons</a><br>
                <a href="adminEvent.php" class="text-decoration-none">Manage Events</a><br>
            </div>

        </div>

        <div class="col-7">
<?php
    }
}else{
?>
        </div>

        <div class="col-7">
<?php
}
?>