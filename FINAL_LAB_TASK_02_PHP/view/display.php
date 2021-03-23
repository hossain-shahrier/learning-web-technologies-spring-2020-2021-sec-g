<?php
    session_start();
    $name = $_SESSION['name'];
    $bprice =$_SESSION['bprice'];
    $sprice =$_SESSION['sprice']
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
                <th>Name</th>
                <th>Profit</th>
            </tr>
            <tr>
                <td>Samsung</td>
                <td>5000</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
        </table>
    </fieldset>
</body>
</html>