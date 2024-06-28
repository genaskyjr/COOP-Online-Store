<?php 
session_start();
?>

<br><br><br><br>
            <img src="/images/coop_images/logo.png"><br>
            <!--<a href="">Upload Picture</a><br> -->
            <br><br>
            <p><?php echo $_SESSION['lastName'] . ' ' . $_SESSION['firstName'] . ' - ' . $_SESSION['pos']; ?></p>
            <br><hr>
            <br>
            <p><?php echo $_SESSION['email']; ?></p><br><br>
            <p>Age: <?php echo $_SESSION['age']; ?></p><br><br>
            <p>Sex: <?php echo $_SESSION['sex']; ?></p><br><br><br><br><br>
            <hr>
            <a href="http://localhost/logout.php">Logout</a>
            <hr>
            <br>
            
<br>



            