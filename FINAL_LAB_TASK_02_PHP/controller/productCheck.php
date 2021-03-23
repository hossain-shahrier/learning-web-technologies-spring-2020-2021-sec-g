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
                'name' =>$name,
                'bprice' => $bprice,
                'sprice' => $sprice
            ];
            $status = insertProduct($product);
            if($product && isset($_POST['display'])){
                $_SESSION['name'] = $name;
                $_SESSION['bprice'] = $bprice;
                $_SESSION['sprice'] = $sprice;
                header('location: ../view/display.php');
            }
            else{
                echo "Nothing To Show";
            }
        }
    }


?>