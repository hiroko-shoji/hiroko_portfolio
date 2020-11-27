
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

</div>


