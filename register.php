<?php
include("connect.php");

if(isset($_POST['submit']) ){
    // echo 'it is set';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_type = "Admin";


    $sql = " INSERT INTO users(username, password,email, user_type)";
    $sql.= "VALUE('$username', '$password','$email', '$user_type')" ;

    $query = mysqli_query($conn,$sql);
    if($query == true){
        header("location:index2.php");

        return true;
    }else{
        echo "unsucessful";
        return false;
    }
    


}else{
    // echo ' it is not set';
    header("location:index.php");
}