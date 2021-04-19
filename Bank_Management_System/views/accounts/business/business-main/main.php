<?php
    include('style.php');
?>
<div class="main">
    <div>
        <?php
            include('business-main/businessform.html');
        ?>
    </div>
</div>
<div class="result-container">
        <?php  include('result.php');?>
</div>
<script type = "text/javascript">
    function validation(){
        
        if(form.username.value == ""){
            document.getElementById('error').innerHTML = "Please enter your username.";
            return false;
        }
    }
</script>