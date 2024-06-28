<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img src="/images/coop_images/logo.png">
        <span>Dhvsu Multi-Purpose Cooperative</span>
    </div>
   
    <div class="sidebar-body">
        <div class="sidebar">
            <?php 
                

            ?>
            <ul>
                <li><a href="http://localhost/dashboard.php">Profile</a> </li>
                <li><a href="http://localhost/dashboard.php?addcategory=true">Add Category</a></li>
                <li><a href="http://localhost/dashboard.php?addproduct=true">Add Product</a></li>
                <li>Add Promo Deals</li>
                <li><a href="http://localhost/dashboard.php?listcategory=true">List Category</a></li>
                <li>List Product</li>
                <li>List Promo Deals</li>
            </ul>

        </div>

        <div class="body">
            <?php 
                $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if($link=="http://localhost/dashboard.php?addcategory=true"){
                    include_once 'clerk_sidebar.php';
                }else if($link=="http://localhost/dashboard.php?addproduct=true"){
                    include_once 'clerk_sidebar.php';
                }else if($link=="http://localhost/dashboard.php?listcategory=true"){
                    include_once 'clerk_sidebar.php';
                }else if($link=="http://localhost/dashboard.php?account=true"){
                    include_once 'clerk_sidebar.php';
                }else{
                    include_once 'profile.php';
                }
            ?>
 
        </div>

    </div>

    <div class="footer">
            <h>@Dhvsu. All Rights Reserved.</h>
    </div>




    
</body>
</html>