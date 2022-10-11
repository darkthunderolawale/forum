<?php include "header.php";?>
    <div> view categories</div>
   

    <?php ?>

    <div id = "content">
        <?php
include "connect.php";
// echo $cid = $_GET['cid'];
// if(isset($_GET['id'])){


//     echo "yes";
// }else{

//     echo "failed";
// }
if (isset($_SESSION['uid'])){
    // $logged ="<a href = 'create_topic.php?cid = ".$cid.">click here to create a topic</a>";

// else{
//     $logged = " please login to create topic in this forum ";
// }
$getid  = $_GET['id'];

$sql = "SELECT id  FROM categories WHERE id = '$id'";
$res = mysqli_query($conn,$sql); //or die(mysqli_error($conn));
if (mysqli_num_rows($res) == 1){

    $sql2 = "SELECT FROM topics WHERE category_id = '$id' ORDER BY topic_reply_date DESC";
    $res2 = mysqli_query($conn,$sql2).mysqli_error($conn);
    


    // while($row = mysqli_fetch_assoc($res)){
    //    $id = $row['id'];
    //    $title = $row['category_title'];
    //    $description = $row['category_description'];
    //    $categories .= "<a href='view_category.php?cid =".$id."'class = 'cat_link>".$title." -<font size ='-1'>".$description."</font></a>"; 
    // }
    // echo $categories;
}
}
else{
    echo "<a href= 'notindex.php'>Return to forum index</a>";
    echo "<p> you are trying to view category that does not exist yet</p>";
}
        ?>
    </div>
</body>
</html>