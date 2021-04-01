<?php
    session_start();
    require_once('../../model/userModel.php');
    $email = $_SESSION['email'];
    $id = userId($email);
?>
<body>
    <nav>
        <div class="navbar">
            <p>Welcome, <?php echo $_SESSION['username']?></p>
            <button onClick=logout()>Logout</button>
        </div>  
    </nav>
<script type="text/javascript">
    function logout(){
        var r = confirm("Do you really want to log out?");
        if(r){
            window.location.href = '../../views/business/controller/logout.php';
        }
    }
</script>
