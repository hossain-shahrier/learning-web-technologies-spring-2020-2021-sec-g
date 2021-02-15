<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAT</title>
</head>
<body>
    <?php  
 $price = 100;
 $vat =15;
 $withvat = ($price - (($price*$vat)/100));
 echo "After $vat % of VAT Price is " . $withvat . "<br />";  
  ?>
</body>
</html>