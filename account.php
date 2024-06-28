
<?php 
session_start();
?>

<style>
.input-size{
    width: 30%;
    border-radius: 6px;
    height: 40px;
    margin-top: 15px;
    font-size: large;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding-left: 5px;
    background-color: white;
}

#save{
    background-color: #C5E0B4;
}

#cancel{
    background-color: #DBDBDB;
}

a{
    text-decoration:none;
    color: black;
}



</style>  


<form method="post" action="">
                <label></label><input type="text" placeholder="First Name" class="input-size" name="fname" required value="<?php echo $_SESSION['firstName']; ?>"><br>
                <input type="text" placeholder="Last Name" class="input-size" name="lname" required value="<?php echo $_SESSION['lastName']; ?>"><br>
                <input type="number" placeholder="Age" class="input-size" name="age" required value="<?php echo $_SESSION['age']; ?>"><br>
               
                <select class="input-size select" name="sex"  required >
                <?php 
                if($_SESSION['sex'] == "Male"){
                    echo "<option value='Male' selected >Male</option>";
                    echo "<option value='Female' >Female</option>";
                }else if($_SESSION['sex'] == "Female"){
                    echo "<option value='Female' selected>Female</option>";
                    echo "<option value='Male'>Male</option>";
                }
                ?>

                </select><br>

                <input type="text" placeholder="Email" class="input-size" name="email" required value="<?php echo $_SESSION['email']; ?>"><br>
                <input type="text" placeholder="Enter New Password" class="input-size" name="password" required><br>
                <input type="text" placeholder="Re-Enter New Password" class="input-size" name="password2" required><br>

                <input type="submit" value="Save" class="input-size" id="save" name="register" required><br>
                
</form>


<input type="button" onclick="location.href='http://localhost/dashboard.php';" value="Cancel" class="input-size" id="cancel"/>


