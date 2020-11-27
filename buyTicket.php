<?php
    include_once 'header.php';
    include_once 'sidebar.php';

    // if(!empty($_SESSION['member_id'])){
    //     $productId = $_GET['productId'];
    //     $productName = $GET['productName'];
    //     $productPrice = $GET['productPrice'];
    //     $mId = $_SESSION['member_id'];

    //     $productData = $SchoolObj->get_one_product($productId);
    // }else{
    //     echo "test";
    // }
?>


        <div class="container my-5">

            <div class="row">
                <div class="col-12">
                    <h3>Please enter Qty.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="buyTicketConfirm.php" method="GET">
                        <!-- <label for="">Enter number</label>
                        <input type="text" name="ticketQty">
                        <button type="submit" name="buy_ticket" class="btn btn-primary">BUY Ticket</button> -->
                        <div class="input-group">
                          <select class="custom-select" name="ticketQty" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>Enter number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                          <div class="input-group-append">
                            <button type="submit" name="buy_ticket" class="btn btn-primary">BUY Ticket</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>



<?php
    include_once 'sidebar2.php';
    include_once 'footer.php';
?>