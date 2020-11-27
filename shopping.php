<?php
    include_once 'header.php';
    include_once 'sidebar.php';

?>

        <div class="container my-5">

            <div class="row">
                <div class="col-12">
                    <h4>Shopping</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                <?php
                    $database_row = $SchoolObj->available_product();

                    foreach($database_row as $row){
                ?>

                <div class="card mb-1" style="width: 15rem;">
                    <img src="racquet.png" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                        <p class="card-text"><?php echo $row['product_price']; ?> Yen</p>
                        <a href="buyTicket.php?productId=<?php echo $row['product_id']; ?>&productPrice=<?php echo $row['product_price']; ?>&productName=<?php echo $row['product_name']; ?>" class="btn btn-primary">BUY</a>
                    </div>
                </div>

                <?php
                    }
                ?>

                </div>
            </div>



        </div>


<?php
    include_once 'sidebar2.php';
    include_once 'footer.php';
?>