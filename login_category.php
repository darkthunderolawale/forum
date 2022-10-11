<?php
include("connect.php");

if(isset($_POST['create']) ){
    // echo 'it is set';
    $category_title = $_POST['category_title'];
   


    $sql = " INSERT INTO categories(category_title)";
    $sql.= "VALUE('$category_title')" ;

    $query = mysqli_query($conn,$sql);
    if($query == true){
        header("location:notindex.php");

        return true;
    }else{
        echo "unsucessful";
        return false;
    }
    


}else{
    // echo ' it is not set';
    header("location:index.php");
}