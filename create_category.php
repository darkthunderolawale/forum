<?php
include("connect.php");
include("header.php");
echo $_SESSION['usertype'];
if ($_SESSION['usertype']==1){
    echo "admin";
}
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
        <form action="login_category.php" method="post">

            <p>category</p>
            <textarea name="category_title" id="" cols="75" rows="5"></textarea>
            <br><br>
            <input type="hidden" name=getid  value="<?php echo $getid ?>">
            <input type="submit" name="create" value="create">
        </form>
    </div>
</body>

</html>
