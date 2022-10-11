<?php session_start();
include "connect.php";

if (isset($_POST['username'])){
    $username = $_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'  AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == true) {

        $row = mysqli_fetch_assoc($result);



            echo "Logged in!";

            $_SESSION['username'] = $row['username'];

               $uid =  $row['username'];
            $_SESSION['uid'] = $row['id'];
            $_SESSION['usertype'] = $row['user_type'];

            header("Location:notindex.php");

            exit();
        }else{
        echo "incorrrect password or username";
        }
        


    }else{
echo "Incorect User name or passeeeeeeee";
        // header("Location: login.php?error=Incorect User name or password");

        exit();

    }



    // $sql = "SELECT * FROM users WHERE username = '$username' AND password ='$password' ";
    // $res = mysqli_query($conn, $sql) ;//or die(mysqli_error($conn));
    // if (mysqli_num_rows($res) ==1){
    //     $row = mysqli_fetch_assoc($res);
    //     if ($row['username'] == $username && $row['password'] == $password) {
    //         $_SESSION['uid'] = $row['id'];

    //         $_SESSION['username'] = $row['username'];
    //         header("location : login.php");
    //         exit();
    //     }
    //     else{
    //         echo 'incorrect password';
    //     }

    // }else{
    //     echo"login failed";
    // }




?>
