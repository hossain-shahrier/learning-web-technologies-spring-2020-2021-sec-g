<?php include('style.php');?>

<script type="text/javascript" src="script.js"></script>
<div class="main">
    <div class="search">
        <form action="" method="post">
            <input 
            id="search" 
            type="search" 
            name="search_input" 
            class="search_input" 
            placeholder="Search by User Name, ID or Email ..."
            onkeyup="search()"
            >
            <input type="submit" name="search" value="search" class="search_a">
        </form>
    </div>
    <div class="result">
        <?php
            include('result.php');
        ?>
    </div>
</div>
