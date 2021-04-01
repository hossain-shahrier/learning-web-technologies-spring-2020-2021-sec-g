<?php
    require_once("./model/storeModel.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stores</title>
</head>
<body>
    <center>
        <table>
            <thead>
                <tr>
                    <th colspan="3">Your Stores</th><br><br><br>

                </tr>
            </thead>
            
                <?php $row = getStores();
                foreach($row as $var){
                    echo "
                        <tbody>
                            <tr>
                                <td><a href=\"store.php?id={$var['id']} \">{$var['storename']}</a></td>
                                <td>{$var['storetype']}</td>
                                <td>{$var['producttype']}</td>
                            </tr>
                        </tbody>
                            ";
                }
                ?>
                
        </table>
    </center>
    
</body>
</html>