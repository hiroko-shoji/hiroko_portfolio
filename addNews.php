<?php
    include_once 'header.php';
    include_once 'sidebar.php';


    ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12">

            <form action="Action.php" method="POST">
                <div class="form-group">
                    <label for="">Title</label>
                    <textarea class="form-control" name="title" id="" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Main Area</label>
                    <textarea class="form-control" name="main" id="" rows="3"></textarea>
                </div>
                <button type="submit" name="add_news" class="btn btn-primary">ADD NEWS</button>
            </form>

        </div>
    </div>
</div>


<?php
    include_once 'sidebar2.php';
    include_once 'footer.php';
?>