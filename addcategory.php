<link href="css/addcategory.css" rel="stylesheet">


<form action="" method="post" enctype="multipart/form-data">
    <p>Add Category</p>
    <input type="text" class="input-size" placeholder="e.g School Suppy" name="cat_name" required><br><br>
    Upload Category Image
    <input type="file" name="file" required accept=".png, .jpg, .jpeg">
    <input type="submit" name="addcategory" value="Add" class="input-size bg-color">
</form>


<?php 
include_once 'db/dbcon.php';


if(isset($_POST['addcategory'])){
    $targetDir = "images/categories/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $_POST['cat_name'];

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath .'.jpg')){
        //make dir for this category
        mkdir($targetFilePath);
        
        //record
        $cat_name = $_POST['cat_name'];
        $cat_img = $targetFilePath.'.jpg';
        $sql = "INSERT INTO `category`(`cat_name`, `cat_img`) VALUES ('$cat_name','$cat_img')";
        $result = $pdoConnect->prepare($sql);
        $result->execute();
        echo "category added";
    }
    
}



?>