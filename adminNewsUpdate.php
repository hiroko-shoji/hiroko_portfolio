<?php
    include_once 'header.php';
    include_once 'sidebar.php';

    if(isset($_GET['update'])){

        $newsId = $_GET['update'];
        $news = $SchoolObj->get_one_news($newsId);

    }

    ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12">

            <form action="Action.php" method="POST">
                <div class="form-group">
                    <label for="">Title</label>
                    <textarea class="form-control" name="title" id="" rows="1"><?php echo $news['news_title'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Main Area</label>
                    <textarea class="form-control" name="main" id="" rows="3"><?php echo $news['news_main'];?></textarea>
                </div>
                <input type="hidden" name="newsId" value="<?php echo $news['news_id'];?>">
                <button type="submit" name="update_news" class="btn btn-success">UPDATE NEWS</button>
            </form>

        </div>
    </div>
</div>


<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>