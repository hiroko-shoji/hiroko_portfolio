<?php
    include_once 'header.php';
    include_once 'sidebar.php';


?>


            <div class="jumbotron my-5">
                <h1 class="display-4">WHAT'S NEW</h1>
                <hr class="my-4">
                <p><?php echo "Today is " . date("Y-m-d") . "<br>"; ?></p>
            </div>
        </div>


        <div class="col-3">

            <div class="jumbotron my-5">

                Remaining number of lessons:
                <br>

            <?php
                if(!empty($_SESSION['member_id'])){
                    $mId = $_SESSION['member_id'];

                    $SchoolObj->ticket_num($mId);

                    $count = $SchoolObj->ticket_num($mId);

                    echo $count;


                }
            ?>

            </div>

        </div>







<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>