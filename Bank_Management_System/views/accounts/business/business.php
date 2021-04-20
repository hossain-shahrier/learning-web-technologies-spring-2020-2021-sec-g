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
    function hide(){
            
        

    }
    function validation(){
        
        // Username
        if(document.businessForm.username.value == ''){
            document.getElementById('error').innerHTML = "Please enter your username.";
            return false;
        }
        if(document.businessForm.username.value.length <4 ){
            document.getElementById('error').innerHTML = "Username must be more than 3 letters";
            return false;
        }
        if(document.businessForm.username.value.length > 3){
            document.getElementById('error').style.display = 'none';
        }
        // Business Name
        if(document.businessForm.name.value == ''){
            document.getElementById('berror').innerHTML = "Please enter your business name.";
            return false;
        }
        if(document.businessForm.name.value.length <3){
            document.getElementById('berror').innerHTML = "Business name must be more than 3 letters";
            return false;
        }
        if(document.businessForm.name.value.length > 2){
            document.getElementById('berror').style.display = 'none';
        }
        // Business Phone
        if(document.businessForm.phone.value == ''){
            document.getElementById('perror').innerHTML = "Please enter your phone number.";
            return false;
        }
        if(document.businessForm.phone.value.length <11){
            document.getElementById('perror').innerHTML = "Check your digits again";
            return false;
        }
        if(document.businessForm.phone.value.length > 10){
            document.getElementById('perror').style.display = 'none';
        }
        // Business Type
        if(document.businessForm.type.value == ''){
            document.getElementById('terror').innerHTML = "Please enter your business type.";
            return false;
        }
        if(document.businessForm.type.value.length <3){
            document.getElementById('terror').innerHTML = "Must be more than three letters";
            return false;
        }
        if(document.businessForm.type.value.length > 10){
            document.getElementById('terror').style.display = 'none';
        }
        // Business URL
        if(document.businessForm.url.value == ''){
            document.getElementById('uerror').innerHTML = "Please enter your business url.";
            return false;
        }
        if(document.businessForm.url.value.length <6){
            document.getElementById('uerror').innerHTML = "Must be more than five letters";
            return false;
        }
        if(document.businessForm.url.value.length > 5){
            document.getElementById('uerror').style.display = 'none';
        }
        // Business URL
        if(document.businessForm.location.value == ''){
            document.getElementById('lerror').innerHTML = "Please enter your business location.";
            return false;
        }
        if(document.businessForm.location.value.length <6){
            document.getElementById('lerror').innerHTML = "Must be more than five letters";
            return false;
        }
        if(document.businessForm.location.value.length > 5){
            document.getElementById('lerror').style.display = 'none';
        }
    }
</script>