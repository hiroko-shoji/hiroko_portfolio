<?php
    include_once 'header.php';
    include_once 'sidebar.php';


    ?>

<div class="container my-5">

<div class="row">
    <div class="col-12">

        <a href="addNews.php" class="btn btn-success">ADD NEWS</a>

    </div>
</div>

<div class="row mt-2">
    <div class="col-12">

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th></th>
                        <th>news_id</th>
                        <th>news_title</th>
                        <th>news_text</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $newsArray = $SchoolObj->all_news();

                    if($newsArray){
                        foreach($newsArray as $row){
                    ?>
                        <tr>
                            <td>
                                <a href="adminNewsUpdate.php?update=<?php echo $row['news_id'];?>" style="color: green;">Update</a>
                                <a href="adminNewsDelete.php?delete=<?php echo $row['news_id'];?>" style="color: red;">Delete</a>
                            </td>
                            <td><?php echo $row['news_id'];?></td>
                            <td><?php echo $row['news_title'];?></td>
                            <td><?php echo $row['news_main'];?></td>
                        </tr>
                    <?php
                        }

                        }else{
                    ?>
                            <td><?php echo "No news found.";?></td>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

    </div>
</div>


<?php
    // include_once 'sidebar2.php';
    include_once 'footer.php';
?>