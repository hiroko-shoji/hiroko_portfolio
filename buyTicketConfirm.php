<?php
    include_once 'header.php';
    include_once 'sidebar.php';

    if(!empty($_SESSION['member_id'])){
        $ticketQty = $_GET['ticketQty'];
        $mId = $_SESSION['member_id'];


    }else{
        echo "test";
    }

?>

        <div class="container my-5">

            <div class="row">
                <div class="col-12">
                    <h3>Buy Ticket?</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="Action.php" method="POST">
                        <label for="">Qty: </label>
                        <input type="hidden" name="mId" value="<?php echo $mId; ?>">
                        <input type="hidden" name="ticketQty" value="<?php echo $ticketQty;?>"><?php echo $ticketQty;?>
                        <button type="submit" name="buy_ticket" class="btn btn-primary">BUY</button>
                    </form>
                </div>
            </div>



        </div>


<?php
    include_once 'sidebar2.php';
    include_once 'footer.php';
?>