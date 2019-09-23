<html> 
<head> 
    <title>Process Form Data</title>  
</head> 
<body> 
	<h1>Process Form Data</h1>   
	<?php   
    echo "First Name: " . $_POST["first_name"] . "<br>";
    echo "Last  Name: " . $_POST["last_name"] . "<br>";
    echo "Phone Number: " . $_POST["phone_number"] . "<br>";
    echo "Email Address: " . $_POST["email_address"] . "<br>";
    echo "Stress Address: " . $_POST["address_street_1"] . "<br>";
    echo "Stress Address Line 2: " . $_POST["address_street_2"] . "<br>";
    echo "City: " . $_POST["city"] . "<br>";
    echo "State: " . $_POST["state"] . "<br>";
    echo "Postcode : " . $_POST["postcode"] . "<br>";
    echo "Country: " . $_POST["country"] . "<br>";
    echo "Mastercard: " . $_POST["cc_mastercard"] . "<br>";
    echo "Visa: " . $_POST["cc_visa"] . "<br>";
    echo "Amex: " . $_POST["cc_amex"] . "<br>";
    echo "Name on Card: " . $_POST["ccname"] . "<br>";
    echo "Card Number: " . $_POST["ccnumber"] . "<br>";
    echo "Security Code: " . $_POST["ccsecuritycode"] . "<br>";
    echo "Currency : " . $_POST["currency"] . "<br>";
    echo "Shipping : $" . $_POST["shipping"] . "<br>";
    echo "Tax: " . $_POST["tax"] . "<br>";
    echo "Tax Rate : " . $_POST["taxRate"] . "<br>";
    echo "Item Count: " . $_POST["itemCount"] . "<br>";

    
    $content = $_POST;
    $body = '';
    $grandTotal = '';
    $shipping = $content['shipping'];
    
    for($i=1; $i < $content['itemCount'] + 1; $i++) {
  $name = 'item_name_'.$i;
  $quantity = 'item_quantity_'.$i;
  $price = 'item_price_'.$i;
  $total = $content[$quantity]*$content[$price];
  $grandTotal += $total;
  $body .= 'Item #'.$i.': ';
  $body .= $content[$name].' Qty x '.$content[$quantity].' Price
         $'.$content[$price];
  $body .= '<br>';
}


echo $body;
echo 'Grand Total: $'.($grandTotal + $shipping);

    
?>
</body>  
</html>