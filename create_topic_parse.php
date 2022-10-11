<?php
session_start();
include("connect.php");
if (!isset($_SESSION['username'])) {
    header("location:index.php?You have to be logged in to create a post");
    exit();
}
if (isset($_POST['topic_submit'])) {
    if (($_POST['topic_title'] == "") && ($_POST['topic_content'] == "")) {
        echo " you did not fill in both fields pls return to the previous page";
        exit();
    } else {
        $getid = $_POST['getid'];
        $title = $_POST['topic_title'];
        $content = $_POST['topic_content'];
        $creator = $_SESSION['username'];

        $sql = " INSERT INTO topics (category_id,topic_title,topic_creator,topic_content,topic_date,topic_reply_date)";
        $sql.=  "VALUE('$getid','$title','$creator','$content',NOW(),NOW())";
        $res = mysqli_query($conn, $sql);
        // $new_topic_id = mysqli_insert_id($conn);
        // $sql2 = "INSERT INTO post (category_id, topic_id, post_creator,post_content,post_date";
        // $sql2.="VALUE('$getid','$new_topic_id','$creator','$content',NOW())";
        // echo $sql2;
        // echo $res3;
        // $res2 = mysqli_query($conn, $sql2,true) or mysqli_error($conn);
        // $sql3 = "UPDATE categories SET last_post_date = NOW(),last_user_posted='$creator' WHERE id='$getid' LIMIT 1";
        // $res3 = mysqli_query($conn,$sql3, true);
        if ($res)  {
            header("location:view_category.php?cid=$getid");
        } else {
            echo "there was a problem creating your topic pls try again";
        }
    }
}
