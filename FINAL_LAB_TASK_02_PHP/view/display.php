<?php
    session_start();
    require_once('../model/productModel.php');
   
    // $bprice =$_SESSION['bprice'];
    // $sprice =$_SESSION['sprice'];
    // productInfo($name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Product</title>
</head>
<body>
    <fieldset>
        <legend>DISPLAY</legend>
        <table>
            <tr>
                <th>Name </th>
                <th>Profit</th>
            </tr>
        <?php $row = getAllProduct(); 
        foreach($row as $var){
            $profit = $var['sprice']-$var['bprice'];
            echo "
            <tr>
                <td>{$var['name']}</td>
                <td>{$profit}</td>
                <td><a href='./update.html'>edit</a></td>
                <td><a href='./delete.html'>delete</a></td>
        </tr>
            ";
        }   
           ?> 
        </table>
    </fieldset>
</body>
</html>