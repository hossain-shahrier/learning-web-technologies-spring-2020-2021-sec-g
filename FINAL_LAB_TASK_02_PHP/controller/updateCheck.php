<?php
    session_start();
    require_once('../model/productModel.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $bprice = $_POST['bprice'];
        $sprice= $_POST['sprice'];

        
        if($name ==""|| $bprice ==""|| $sprice ==""){
            echo "Null Input ...";
        }
        else{
            $product = [
                'name'   => $name,
                'bprice' => $bprice,
                'sprice' => $sprice
            ];
            $status = updateProduct($product);
            if($status && isset($_POST['display'])){
                header('location: ../view/display.php');
            }
            else{
                echo "Nothing To Show";
            }
        }
    }


?>