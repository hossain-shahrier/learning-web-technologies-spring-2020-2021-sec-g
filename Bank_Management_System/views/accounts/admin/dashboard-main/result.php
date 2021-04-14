<?php
    require('model/userModel.php');   
    $id = $_SESSION['id']; 
    if(isset($_POST['search'])){
       
       $search_input = $_POST['search_input'];
       $sql = "SELECT * FROM `users` WHERE CONCAT(`id`, `username`, `email`) LIKE '%".$search_input."%' AND id != $id";
       $result = filtertable($sql);
    }else{
        $sql = "SELECT * from users WHERE id!=$id";
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
                    <th>Status</th>
                    <th>Action</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            
            <tbody>
            <?php  while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['username'];?></td>
                    <td><?= $row['email'];?></td>
                    <td>
                        <button name="status" id="status" class="status">
                            <?php 
                                if($row['active']){
                                    echo "Active";
                                }
                                else{
                                    echo "Deactive";
                                }
                            ?>
                        </button>
                    </td>
                    <td>
                        <button name="action" id="action" class="action">
                            <?php 
                                if($row['active']){
                                    echo "Deactive";
                                }
                                else{
                                    echo "Active";
                                }
                            ?>
                        </button>
                    </td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
        <!-- <script type="text/javascript">

//         function redirect(){
//                 const data = document.getElementById('status').value;

//                 const xhttp = new XMLHttpRequest();
//                 xhttp.open('POST','dashboard-main/status.php',true);
                
//                 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//                 xhttp.onreadystatechange = function(){
//                     if(this.readyState == 4 && this.status == 200){
//                         document.getElementById('status').innerHTML = xhttp.responseText;
//                     }
//                 }
//                 xhttp.send('name='+ data);   
//         }   
// </script> -->