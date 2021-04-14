<?php 
    include('style.php');
    require_once('model/userModel.php');
?>
<div>
    <div class="main">
    <form id="form" action="./account-main/updateCheck.php" method="POST">
                <h1>Edit Personal Information</h1>
                <table>
                    <tr>
                        <td><input type="text" name="username" 
                            id="input" 
                            placeholder="Username">
                        </td>
                    </tr>
                        <td><input type="email" name="email" 
                            id="input" 
                            placeholder="Email Address">
                        </td>
                    <tr>
                    <tr>
                        <td><input type="password" name="password" 
                            id="input" 
                            placeholder="Password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="submit" name ="submit" type="submit" value="submit">
                        </td>
                    </tr>
                    </tr>
                </table>
            </form>
    </div>
</div>