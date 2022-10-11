<?php
include("connect.php");
include("header.php");
if ((!isset($_SESSION['username']) || !isset($_GET['cid']))) {
    header("location:index.php?You have to be logged in to create a post");
    exit();
}
?>
<?php
// $phpVariable = "Dog";
// $_SESSION['animal'] = $phpVariable;
// echo $phpVariable;
$getid  = $_GET['cid'];
// echo"<select name='category_name' id=''>";  
// // $title = $_row2['category_title'];
// $sql2 = "SELECT  * FROM categories ORDER BY category_title ASC";

// $res2 = mysqli_query($conn, $sql2);
// if (mysqli_num_rows($res2)  >0){
//                 while ($row2 = mysqli_fetch_assoc($res2)){
//                     $cid =$row2['id'];
//                  $title = $row2['category_title'];

//                  echo"<option value = '$cid'>".$title."</option>";
//                 //  echo $title;;
//                 // echo"<a href='view_category.php?cid={$cid}' class='cat_link'>".$title."</a>";

//                 }
//                 echo"</select>";
//         echo 'nifgg';
//         echo "\nselect";
//         // $sql = "SELECT id FROM topics WHERE id = '$getid' ";
//     }
//     else{
//             echo 'hjhgh';
//         }

//         if ( isset($_SESSION['uid'])  ) {
//             echo 'hi';
//             echo $getid;





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
        <form action="create_topic_parse.php" method="post">
            <p>Topic title</p>
            <input type="text" name="topic_title" id="" size="98" maxlength="150">
            <p>topic content</p>
            <textarea name="topic_content" id="" cols="75" rows="5"></textarea>
            <br><br>
            <input type="hidden" name=getid value="<?php echo $getid ?>">
            <input type="submit" name="topic_submit" value="create your topic">
        </form>
    </div>
</body>

</html>
<?php
// }else{

// header("Location: index.php");

// exit();

// }

?>