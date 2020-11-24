<?php
    include_once 'header.php';
    include_once 'sidebar.php';


?>

    <div class="col my-5">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    Shopping
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="buyTicketConfirm.php" method="GET">
                        <label for="">Enter number</label>
                        <input type="text" name="ticketQty">
                        <button type="submit" name="buy_ticket" class="btn btn-primary">BUY</button>
                    </form>
                </div>
            </div>



        </div>
    </div>



<?php
    include_once 'footer.php';
?>