<?php



//login processs
function loginProcess($email, $pass){
    include_once 'db/dbcon.php';
    $pdoQuery = "SELECT * FROM `users` WHERE `user_email` = '$email' && `user_password` = '$pass'";
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    $pdoResult->execute();

    if($pdoResult->rowCount() > 0){
        echo "<br><p style='margin: 0px 30px 0px 30px'>Login Successfully! you will redirect to Dashboard page after 2 seconds</p>";
        //start session
        
        $row = $pdoResult->fetch(PDO::FETCH_ASSOC);

        //save current user to session/
        session_start();
        $_SESSION['firstName'] = $row['user_first_name'];
        $_SESSION['lastName'] = $row['user_last_name'];
        $_SESSION['age'] = $row['user_age'];
        $_SESSION['sex']  = $row['user_sex'];
        $_SESSION['email']  = $row['user_email'];
        $_SESSION['pos']  = $row['user_pos'];

        header('Location: dashboard.php'); 
    }else{
        //something error
        //echo $exc->getMessage();
        echo "<br><p style='margin: 0px 30px 0px 30px'>Wrong Username or Passsword!</p>";
    }

}



//validateForm for register
function validateForm($fname, $lname, int $age, $sex, $email, $password, $password2){
    include_once 'db/dbcon.php';
    $isValid = 0;
    //age
    if(is_int($age)){
        $isValid = $isValid + 1;
    }else{
        echo "<br><p style='margin: 0px 30px 0px 30px'>Age must be a number!</p>";
        $isValid = $isValid - 1;
    }
    
    //confirm password
    if($password == $password2){
        $isValid = $isValid + 1;
    }else{
        echo "<br><p style='margin: 0px 30px 0px 30px'>Password & Confirm Password Doesnt Match!</p>";
        $isValid = $isValid - 1;
    }

    
    //check email if has @
    if(str_contains($email,"@")){
        //check email if available
        $pdoQuery = "SELECT * FROM `users` WHERE `user_email` = '$email'";
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute();
        //check email if exist
        if($pdoResult->rowCount() > 0){
            echo "<br><p style='margin: 0px 30px 0px 30px'>Email Already Registered!</p>";
            $isValid = $isValid - 1;
        }else{
            $isValid = $isValid + 1;
        }
    }else{
        echo "<br><p style='margin: 0px 30px 0px 30px'>Invalid Email Address!</p>";
        $isValid = $isValid - 1;
    }



    //echo $isValid;
    //check if all form is valid
    if($isValid==3){
        // create account
        //include_once 'db/dbcon.php';
        $pdoQuery = "INSERT INTO `users`(`user_first_name`, `user_last_name`, `user_age`, `user_sex`, `user_email`, `user_password`) VALUES 
        ('$fname','$lname','$age','$sex','$email','$password')";
        $pdoResult = $pdoConnect->prepare($pdoQuery);
        $pdoResult->execute();
        if($pdoResult->rowCount() > 0){
            echo "<br><p style='margin: 0px 30px 0px 30px'>Successful Registered! you will redirect to Login page after 5seconds</p>";
            header( "refresh:5; url=login.php" ); 
        }else{
            //something error
            echo $exc->getMessage();
        }
    }

    

}

?>