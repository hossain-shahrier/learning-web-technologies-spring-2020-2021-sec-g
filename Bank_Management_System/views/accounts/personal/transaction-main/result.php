<?php
        include('style.php');
        session_start();
        $self =$_SESSION['id'];
        $name = $_REQUEST['name'];
        $conn = mysqli_connect('localhost', 'root', '', 'bank_management_system');
        $sql = "SELECT * FROM `users` WHERE username LIKE '%".$name."%' AND id !=5 AND id != $self ";
        $result = mysqli_query($conn, $sql);

        $response = "<table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Account</th>
                    <th>Send Money</th>
                </tr>
            </thead>";
            
            
        while ($row = mysqli_fetch_assoc($result)){ 
             $response .="<tbody>
                            <tr>
                                <td>{$row['id']}</td>
                                <td>{$row['username']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['account']}</td>
                                <td><a href='transaction-main/details/details.php?id={$row['id']}'>Send</a></td>
                            </tr>
                        </tbody>";
        }

        $response .="</table>";
        
        echo $response;
?>