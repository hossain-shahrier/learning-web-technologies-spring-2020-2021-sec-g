<?php
    session_start();
    require_once('../model/storeModel.php');
    
    if(isset($_POST['submit'])){
        $storename = $_POST['storename'];
        $storetype = $_POST['storetype'];
        $producttype = $_POST['producttype'];

        if($storename == "" || $storetype == "" || $producttype == "" ){
			echo "Null Input...";
		}
        else{
            $store = [	
                'storename'	 => $storename, 
                'storetype'	 => $storetype, 
                'producttype'=> $producttype
            ];
    
            $status = insertStore($store);
            if($status){
                header('location: ../stores.html');
            }else{
                echo "error..try again";
            }

        }

    }
?>