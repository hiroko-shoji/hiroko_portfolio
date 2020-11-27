<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>


    <div class="container my-5">

        <?php

        $newsArray = $SchoolObj->all_news();

        if($newsArray){
            foreach($newsArray as $row){
        ?>

            <div class="card mb-2">
                <div class="card-body">
                    <p class="font-weight-bold"><i class="fas fa-comment"></i> <?php echo $row['news_title'];?></p>
                    <p><?php echo $row['news_main'];?></p>
                </div>
            </div>

        <?php
            }
        ?>

    </div>

        <?php
        }else{
        ?>

            <div class="jumbotron my-5">
                <h1 class="display-4">Today is</h1>
                <hr class="my-4">
                <p><?php echo date("Y-m-d") . "<br>"; ?></p>
            </div>

        <?php
        }
        ?>

    </div>


        <div class="col-3">

            <div class="jumbotron my-5">

                Remaining number of lessons:
                <br>

            <?php
                if(!empty($_SESSION['member_id'])){
                    $mId = $_SESSION['member_id'];

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