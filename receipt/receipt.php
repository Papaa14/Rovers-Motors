<?php
use Phppot\Order;

require_once __DIR__ . '';
$orderModel = new Order();
$orderResult = $orderModel->getAllOrders();
?>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CSRF Protection using PHP</title>
<link rel="stylesheet" type="text/css"
    href="assets/css/style.css" />
</head>
<body>
    <div class="phppot-container">
        <h1 class="page-heading">Generate PDF invoice with FPDF</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order Ref</th>
                    <th scope="col" class="text-right">Amount</th>
                    <th scope="col" class="text-right">Order Status</th>
                    <th scope="col" class="text-right">Invoice</th>
                </tr>
            </thead>
            <tbody>
		<?php foreach ($orderResult as $k => $v) { ?>
			<tr>
                    <td><?php echo $orderResult[$k]["order_ref"];?></td>
                    <td class="text-right"><?php echo $orderResult[$k]["amount"];?></td>
                    <td class="text-right"><?php echo $orderResult[$k]["order_status"];?></td>
                    <td class="text-right"><a target="_blank"
                        title="Generate Invoice"
                        href="./invoice.php?id=<?php echo $orderResult[$k]["id"];?>"><?php echo $orderResult[$k]["order_invoice"];?></a></td>
                </tr>
			<?php }?>
		</tbody>
        </table>
    </div>
</body>
</html>