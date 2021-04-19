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
        include('loan-main/main.php');
    ?>
</div> 
<script type = "text/javascript">          
        function validation(){
            if((form.exlusive.checked == true) && (form.damage.checked == true) && (form.tech.checked == true))
            {
                return true;
            }
            else{
                document.getElementById('error').innerHTML = "Please select any loan service. ";
                return false;
            }
            
            
        }
</script>