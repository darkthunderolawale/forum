<?php
session_start();
include("connect.php");
if (!isset($_SESSION['username'])) {
    header("location:index.php?You have to be logged in to create a post");
    exit();
}
if (isset($_POST['comment'])) {
    if (($_POST['poster'] == "") && ($_POST['content'] == "")) {
        echo " you did not fill in both fields pls return to the previous page";
        exit();
    } else {
        // $sql2 = "SELECT  id FROM categories WHERE id = '{$getid}' ";
        // $res2 = mysqli_query($conn, $sql2); 
 

 
                $getid = $_POST['getid'];

        $tid = $_POST['tid'];
        $poster = $_SESSION['username'];
        $content = $_POST['content'];

        $sql = " INSERT INTO comment (category_id,topic_id,poster,content,comment_date)";
        $sql.=  "VALUE('$getid','$tid','$poster','$content',NOW())";
        $res = mysqli_query($conn, $sql);
        //  echo $sql;
        // $_SESSION['content'] = $row['content'];
        // $_SESSION['date'] = $row['comment_date'];
        // $_SESSION['post'] = $row['poster'];
        header("location:view_category.php?cid=".$getid."&tid=".$tid."");
            
        

      
    }
}
