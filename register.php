
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="css/register.css" rel="stylesheet">

  
</head>
<body>
    <div class="header">
        <img src="/images/coop_images/logo.png">
        <h3>Dhvsu Multi-Purpose Cooperative</h3>
    </div>

    <div class="slider-form-container">
        
        <div class="slider-container">
            <p>slider</p>
            
        
        </div>

        <div class="form-container">

            <div class="form-header">
                <img src="/images/coop_images/account_icon.png">
                <h3>Create an Account</h3>
            </div>

            <form method="post" action="">
                <input type="text" placeholder="First Name" class="input-size" name="fname" required><br>
                <input type="text" placeholder="Last Name" class="input-size" name="lname" required><br>
                <input type="number" placeholder="Age" class="input-size" name="age" required><br>

               
                <select class="input-size select" name="sex"  required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>

                <input type="text" placeholder="Email" class="input-size" name="email" required><br>
                <input type="text" placeholder="Password" class="input-size" name="password" required><br>
                <input type="text" placeholder="Re-Enter Password" class="input-size" name="password2" required><br>
                <input type="submit" value="Register" class="input-size bg-color" name="register" required><br>
            </form>
           


            <?php 

       
            if(isset($_POST['register'])){
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];


                include_once 'db/func.php';
                validateForm($fname, $lname, $age, $sex, $email, $password, $password2);

                
        
            }
            
            ?>

            <br>
            <p>Already have an account? <a href="login.php">Login Here</a></p>

            



        </div>

    </div>

</body>
</html>