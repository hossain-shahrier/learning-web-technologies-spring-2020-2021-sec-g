<?php 
    include('style.php');
    $username = $_SESSION['username'];
    $id =$_SESSION['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'bank_management_system');
    $sql = "SELECT * FROM `business` INNER JOIN `users` ON business.username = users.username WHERE users.username = '{$username}' ";
    $result = mysqli_query($conn, $sql);    
?>
<div class="loan-main">
    <center>
    <h4>Business Information</h4>
    <p>Select your business to get loan</p>
    <form id="form" action="./loan-main/loantype.php" method="POST">
    

        <select name="select">
                <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<option>
                                {$row['name']}
                            </option>";
                    }
                ?>
        </select><br>
        <p><strong> All Available Loans</strong></p>
        <input name="radio" type="radio" id="exlusive" name="exlusive" value="exlusive">
        <label name="radio"for="exlusive">Exlusive Duo</label><br>
        <input name="radio"type="radio" id="damage" name="damage" value="damage">
        <label name="radio" for="damage">Damage Lifts</label><br>
        <input name="radio" type="radio" id="tech" name="tech" value="tech">
        <label name="radio" for="tech">Techno leads</label><br>
        <input id="submit" type="submit" value="Submit" name="submit">
    </form>
    </center>
</div>
<div class="loans">
    <p><strong>Loan Informations</strong></p>
    <a href='loan-main/details/details.php?loan=ed'>Exlusive Duo</a>
    <a href='loan-main/details/details.php?loan=dl'>Damage Lifts</a>
    <a href='loan-main/details/details.php?loan=tl'>Techno leads</a> 
</div>