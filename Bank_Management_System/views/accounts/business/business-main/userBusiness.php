<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_POST['submit'])){
        $id = $_SESSION['id'];
        $getUserName = userName($id);
        $_SESSION['username'] = $getUserName;
        $username = $_POST['username'];
        if($getUserName == $username){
                $name      = $_POST['name'];
                $phone     = $_POST['phone'];
                $type      = $_POST['type'];
                $url       = $_POST['url'];
                $location  = $_POST['location'];
                if($username==""|| $name == ""||$phone == ""||$type == ""||$url == ""||$location == ""){
                    echo "Null value found...";
                }else{
                    if(strlen($username > 3)){
                        $business = [
                            'username'  => $username,
                            'bname'     => $name,
                            'phone'     => $phone,
                            'btype'     => $type,
                            'burl'      => $url,
                            'blocation' => $location
                        ];

                        $status = insertBusiness($business);

                        if($status){
                            header('location: ../business.php');
                        }
                        else{
                            echo "Try Again...";
                        }
                    }
                    else{
                        echo "Firstname and Lastname should be more than 3 letters";
                    }
                }
            }
            else{
                echo "Wrong Username";
            }
        }
        

?>