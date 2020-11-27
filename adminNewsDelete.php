<?php
    include_once 'header.php';
    include_once 'sidebar.php';

    if(isset($_GET['delete'])){

        $newsId = $_GET['delete'];
        $news = $SchoolObj->get_one_news($newsId);

    }

    ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12">

            <h3>DELETE?</h3>

            <form action="Action.php" method="POST">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $news['news_title'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Main Area</label>
                    <input type="text" class="form-control" name="main" value="<?php echo $news['news_main'];?>" readonly>
                </div>
                <input type="hidden" name="newsId" value="<?php echo $news['news_id'];?>">
                <button type="submit" name="delete_news" class="btn btn-danger">DELETE NEWS</button>
            </form>

        </div>
    </div>
</div>


<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>