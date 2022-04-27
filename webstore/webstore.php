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
    $total[$i] = $price[$i]*$quantity[$i];
    $subtotal += $total[$i];
}
$shipingfee = $_POST["shippingchoice"];
$alltotal = $subtotal + $shippingfee;
echo "<head>  
<title>Nhat's Webstore</title>
<link rel='stylesheet' href='style.css'>
<script type='text/javascript' src='formChecker.js'></script>
</head>
<body>
<div class='top'>
    <header class='brand'>Nhat's Webstore</header>
</div>
<div class='receive-center'>
<h1 class='brand' style='color: rgb(255, 255, 206)'>Thank you <br>for shopping with us!</h1>
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
                <td>" .$item[$i]." </td>
                <td>".$price[$i]."</td>
                <td>".$quantity[$i]."</td>
                <td>".$total[$i]."</td>
            </tr>";
    }
}
echo " </table>
<table class='totaltable'><tr>
            <th>Sub-total:</th>
            <td>".$subtotal."</td>
        </tr>
        <tr>
            <th>Shipping fee: </th>
            <td>".$shipingfee."</td>
        </tr>
        <tr>
            <th>Total:</th>
            <td>".$alltotal."</td>
        </tr>
    </table>
</div>";
?>