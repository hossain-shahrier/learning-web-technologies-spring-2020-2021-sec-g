<?php 
    include('style.php');
?>
<nav>
    <div class="navbar">
        <p>Welcome, <?php echo $_SESSION['username'] ;?></p>
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