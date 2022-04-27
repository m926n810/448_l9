<?php
$item = array( 
    "Coconut water",
    "Avocado float",
    "Umbrella chilling set",
    "Luxury yacht"
);
$price =array( 
    200,
    300,
    1200,
    30000000
);
$quantity =array( 
    $_POST["coconut"],
    $_POST["avocado"],
    $_POST["umbrella"],
    $_POST["yacht"]
);

$total = array() ;
$subtotal=0;
$alltotal = 0;
for($i=0;$i<4;$i++){
    if($quantity[$i] == "Array") $quantity[$i] = 0;
    $total[$i] = $price[$i]*$quantity[$i];
    $subtotal += $total[$i];
}
$shipingfee = $_POST["shippingchoice"];
$alltotal = $subtotal + $shippingfee;
echo "  <title>Nhat's Webstore</title>
<link rel='stylesheet' href='style.css'>
<script type='text/javascript' src='formChecker.js'></script>
</head>
<body>
<div class='top'>
    <header class='brand'>Nhat's Webstore</header>
</div>
<div class='receive-center'>
    <table class='bought-list'>
        <tr>
            <th>Item name</th>
            <th>Price each</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>";
for($i=0;$i<4;$i++){
    if($quantity[$i]>0){
        echo "<tr>
                <th>" .$item[$i]." </th>
                <th>".$price[$i]."</th>
                <th>".$quantity[$i]."</th>
                <th>".$total[$i]."</th>
            </tr>";
    }
}
echo " <tr>
            <th></th>
            <th></th>
            <th>Sub-total:</th>
            <th>".$subtotal."</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>Shipping fee: </th>
            <th>".$shipingfee."</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>Total:</th>
            <th>".$total."</th>
        </tr>
    </table>
</div>";
?>