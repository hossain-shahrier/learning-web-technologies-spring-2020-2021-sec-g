<link rel="stylesheet" href="style.css">

<?php
    session_start();
    include('model/userModel.php');

?>
<?php
    include('header/header.php');  
?>
<div class="body">
    <?php
        include('sidebar/sidebar.php');
    ?>
    <?php
        include('business-main/main.php');
    ?>
</div>
<script type = "text/javascript">
    function validation(){
        
        if(form.username.value == ""){
            document.getElementById('error').innerHTML = "Please enter your username.";
            return false;
        }
    }
</script>