<?php 
    include('style.php');
    $id =$_SESSION['id'];
    $username = userName($id);

    $conn = mysqli_connect('localhost', 'root', '', 'bank_management_system');
    $sql = "SELECT * FROM `users` WHERE id = $id ";
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);

?>
<nav>
    <div class="navbar">
        <p>Welcome, <?php echo $row['username'] ;?></p>
        <button onClick=logout()>Logout</button>
    </div>
</nav>

<script type="text/javascript">
    function logout(){
        var r = confirm("Do you want to log out ?");
        if(r){
            window.location.href= '../../../../../../oldtown/controller/logOut.php';
        }
    }
</script>