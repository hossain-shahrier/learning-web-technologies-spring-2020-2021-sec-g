<link rel="stylesheet" href="style.css">
<?php
    session_start();
    include('model/userModel.php');
    include('header/header.php');  
?>
<div class="body">
<?php
        include('sidebar/sidebar.php');
?>
<?php
    include('account-main/main.html');
?>

</div>
<script type = "text/javascript">          
        function validation(){
            if(document.updateName.username.value == ""){
                document.getElementById('errorUser').innerHTML = "Please enter your username.";
                return false;
            }
            if(document.updateName.username.value.length <3){
                document.getElementById('errorUser').innerHTML = "Username must be more than three letters.";
                return false;
            }
        }
</script>