<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="order.css">
    </head>
    <body>
        <section class="Order" id="Order">

            <h1 class="heading"><span>Order </span> car</h1>
        
            <div class="row">
        
                <form action="process.php" method="post">
                    <h3>Order your car now</h3>
                    <input type="text" name="name"  placeholder="your name" class="box">
                    <input type="email" name="email"  placeholder="your email" class="box">
                    <input type="tel" name="tel_no"  placeholder="Telephone no." class="box">
                    <textarea placeholder="name of car ordered" name="car_ordered"  class="box" cols="30" rows="10"></textarea>
                    <input type="submit"  name="submit" value="order now" class="btn">
                </form>
            
            </div>
        
        </section>
    </body>
</html>