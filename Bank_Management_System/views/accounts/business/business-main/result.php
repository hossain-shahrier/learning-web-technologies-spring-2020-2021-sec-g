<?php
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'bank_management_system');
    $sql = "SELECT * FROM `business` INNER JOIN `users` ON business.username = users.username WHERE users.username = '{$username}' ";
    $result = mysqli_query($conn, $sql);
?>
<div class="result-container">
    <h4>Business Information</h4>
    <p>Your Businesses</p>

        <select>
                <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<option>
                                {$row['name']}
                            </option>";
                    }
                ?>
        </select>
        <input type="button" value="Get your Business API" onclick="api()" >
   
</div>
<!-- <script type="text/javascript">

    function api(){
        const data = document.getElementById('search_input').value;

            const xhttp = new XMLHttpRequest();
            xhttp.open('POST','business-main/api.php',true);
            
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    //var jsonObject = JSON.parse();
                    document.getElementById('result').innerHTML = xhttp.responseText;
                }
            }
            xhttp.send('name='+ data);
            
}
</script> -->