<link href="css/addproduct.css" rel="stylesheet">


<form action="" method="post" enctype="multipart/form-data">
    <p>Add Product</p>
    <input type="text" class="input-size" placeholder="Enter Product Name" name="prod_name" required><br><br>
    <input type="text" class="input-size" placeholder="Enter Product Quantity" name="prod_qty" required><br><br>
    <input type="text" class="input-size" placeholder="Enter Product Price" name="prod_price" required><br><br>
    <input type="text" class="input-size" placeholder="Enter Product Description" name="prod_desc" required><br><br>

    <select class="input-size" name="category"  required>
                    <option value="" selected disabled>Select Category</option>
                    <?php 
                    include_once 'db/dbcon.php';
                    $pdoQuery = "SELECT * FROM `category`";
                    $pdoResult = $pdoConnect->query($pdoQuery);
                    foreach($pdoResult as $row){
                        //echo $row['cat_name'];
                        echo '<option value='.$row['cat_name'].'>'.$row['cat_name'].'</option>';
                    }
                    ?>

    </select><br><br>


    

    Upload Product Image
    <input type="file" name="file" required accept=".png, .jpg, .jpeg" required>
    <input type="submit" name="addproduct" value="Add" class="input-size bg-color">
</form>


<?php 
include_once 'db/dbcon.php';


if(isset($_POST['addproduct'])){
    $category_folder = $_POST['category'];

    $targetDir = "images/categories/$category_folder/";

    $fileName = basename($_FILES["file"]["name"]);

    $targetFilePath = $targetDir . $fileName;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        $prod_name = $_POST['prod_name'];
        $prod_qty = $_POST['prod_qty'];
        $prod_price = $_POST['prod_price'];
        $prod_category = $_POST['category'];
        $prod_desc = $_POST['prod_desc'];

        $sql = "INSERT INTO `products`(`prod_name`, `prod_qty`, `prod_price`, `prod_category`, `prod_desc`, `prod_img`) VALUES
        ('$prod_name','$prod_qty','$prod_price','$prod_category','$prod_desc','$targetFilePath')";
        $result = $pdoConnect->prepare($sql);
        $result->execute();

        echo "PRODUCT added";

    }
    
}



?>