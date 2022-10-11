<?php
include("connect.php");
include("header.php");
$tid = $_GET['tid'];
$getid = $_GET['cid'];
if ((!isset($_SESSION['username']) || !isset($_GET['tid']))) {
    header("location:index.php?You have to be logged in to comment");
    exit();
}
?>
<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php ?>
    <div id=content>
        <form action="create_comment_parse.php" method="post">

            <p>topic content</p>
            <textarea name="content" id="" cols="75" rows="5"></textarea>
            <br><br>
            <input type="hidden" name=getid  value="<?php echo $getid ?>">
            <input type="hidden" name=tid  value="<?php echo $tid ?>">
            <input type="submit" name="comment" value="comment">
        </form>
    </div>

    
</body>

</html>
