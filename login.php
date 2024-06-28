
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/login.css" rel="stylesheet">

  
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
                <h3>Login</h3>
            </div>

            <form method="post" action="">
                <input type="text" placeholder="Email" class="input-size" name="email" required><br>
                <input type="text" placeholder="Password" class="input-size" name="password" required><br>
                <input type="submit" value="Login" class="input-size bg-color" name="login" required><br>
            </form>

            <?php 

            if(isset($_POST['login'])){
                include_once 'db/func.php';
                loginProcess($_POST['email'], $_POST['password']);
            }
            
            
            ?>
           
            <br>

            <div class="form-foot">
                <a href="forgot.php" class="forgot">Forgot password?</a>
                <a href="register.php" class="signup">Sign Up Here</a>
            </div>
            
          
        </div>

    </div>

</body>
</html>