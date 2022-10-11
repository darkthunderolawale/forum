<?php
include("connect.php");
include("header.php");
$getid  = $_GET['cid'];


if (isset($_SESSION['uid'])) {
    $logged = "<h4 class = 'create_topic'><a href = 'create_topic.php?cid=" . $getid . "'>click here to create a topic</a></h4>";

} else {
    $logged = " please login to create topic in this forum ";
}

$sql2 = "SELECT  id FROM categories WHERE id = '$getid' ";
$res2 = mysqli_query($conn, $sql2); //or die(mysqli_error($conn));


if (mysqli_num_rows($res2) == 1) {
    $sql = "SELECT * FROM topics WHERE category_id = '$getid' ORDER BY topic_reply_date DESC";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $topics = "<div class = 'topics'>";
        $topics .= "<h4 class = 'create'><a href = 'notindex.php'>return to forum index</a> " . $logged."</h4>";
        $topics .= "<div class = 'box'>";
        $topics .= "<p> <hr></p>";
        while ($row = mysqli_fetch_assoc($res)) {
            $tid = $row['id'];
            $title = $row['topic_title'];
            $views = $row['topic_view'];
            $date = $row['topic_date'];
            $content = $row['topic_content'];
            $creator = $row['topic_creator'];
            $sql3 = "SELECT * FROM comment WHERE topic_id = '$tid'  ORDER BY comment_date DESC";
            $res3 = mysqli_query($conn, $sql3);
            $topics .= "<div class ='boxes'><p><span class='post_info'>".$creator."<br>".$date ."</span><Br><h5 class = 'title'>".$title.": </h5><p>".$content."<p class = 'comment'><a href='comment.php?tid=$tid&cid=$getid'>".'<br>comment'."</a></p><hr>";
            if (mysqli_num_rows($res3) > 0){
                while ($row = mysqli_fetch_assoc($res3)) {
                    $coid = $row['id'];
                    $content_comment = $row['content'];
                    $date_comment = $row['comment_date'];
                    $poster = $row['poster'];
                    $topics .= "<p>".$poster."<br>"."$date_comment<br>"."$content_comment</p></div>";
                }
            }

            $topics .= "<tr><td collapse='3'><hr></td><tr>";
           
        }
        $topics.= "</div>";
        $topics.= "</div>";
        echo $topics;
    } else {
        echo "\n<a href= 'notindex.php'>Return to forum index</a>";
        echo "\n<p> there are no topics in this category yet" . $logged . "</p>";
    }
} else {
    echo "<a href= 'notindex.php'>Return to forum index</a>";
    echo "<p> you are trying to view category that does not exist yet</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Modal -->



	
  

</body>
</html>