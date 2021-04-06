<?php
    require('model/userModel.php');
    if(isset($_POST['search'])){
       $search_input = $_POST['search_input'];
       $sql = "SELECT * FROM `users` WHERE CONCAT(`id`, `username`, `email`) LIKE '%".$search_input."%'";
       $result = filtertable($sql);
    }else{
        $sql = "select * from users";
        $result = filtertable($sql);
    }
    function filtertable($sql){
        $conn = getConnection();
        $result = mysqli_query($conn, $sql);
        return $result; 
    }
    
?>
        <table id="table-data">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Account</th>
                </tr>
            </thead>
            
            <tbody>
            <?php  while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['username'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['account'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
