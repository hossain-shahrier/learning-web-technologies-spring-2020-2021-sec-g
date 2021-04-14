<?php 
    include('style.php');
    require_once('model/userModel.php');
?>
<div>
    <div class="main">
        <form action="./contact-main/sendtext.php" method="POST">
            <b><?php
                echo "Contact with, " .getAdmin();
            ?></b><br><br>
            <textarea name="message" rows="20" cols="50"></textarea><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>