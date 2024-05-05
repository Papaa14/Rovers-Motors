
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="bill.css">  
</head>    
<body>
    <div class="container">
    
    <form action="connect.php" method="post">
        
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing address</h3>
                    <div class="inputBox">
                        <span>full name:</span>
                        <input placeholder="JOHN CALEB" name="name" class="input">
                    </div>
                    <div class="inputBox">
                        <span>email:</span>
                        <input type="text" name="email" placeholder="roversmotors@gmail.com" class="input">
                    </div>
                    <div class="inputBox">
                        <span>Address:</span>
                        <input type="text" name="Address"placeholder="city" class="input">
                    </div>
                    <div class="inputBox">
                        <span>TEL_NO:</span>
                        <input type="text" name="TEL_NO" placeholder="0706709332" class="input">
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <span>cards accepted:</span>
                        <img src="Images\png-clipart-payment-debit-card-credit-card-business-paypal-credit-card-text-service.png" alt="" class="img">
                    </div>
                    <div class="inputBox">
                        <span>Name of Card:</span>
                        <input type="text" name="Card_no" placeholder=" mr.john caleb" class="input">
                    </div>
                    <div class="inputBox">
                        <span>Credit Card number:</span>
                        <input type="number" name="CreditCard_number" inputmode="numeric" pattern="([0-9]{4)}-([0-9]{4})-([0-9]{4})-([0-9]{4})" placeholder="0000 0000 0000 0000" class="input"  maxlength="16">
                    </div>
                    <div class="inputBox">
                        <span>Exp Month:</span>
                        <input type="date" name="Exp_Month" placeholder="january" class="input">
                    </div>
            
            </div>
        </div>
        <input type="submit"  name="submit" value="PAY" class="submit-btn">
     </form>
    </div>

       
    
</body>
</html>