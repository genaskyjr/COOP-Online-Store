<?php 
if(isset($_GET['addcategory'])){
    // add category view
    include_once 'addcategory.php';
}else if(isset($_GET['addproduct'])){
    include_once 'addproduct.php';
}else if(isset($_GET['listcategory'])){
    include_once 'listcategory.php';
}else if(isset($_GET['account'])){
    include_once 'account.php';
}


?>