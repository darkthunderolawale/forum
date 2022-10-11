<?php include "header.php"?>
    <div id = "content">
        <?php
        include_once("connect.php");
        $sql = "SELECT * FROM categories ORDER BY category_title ASC";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $categories = '';
        echo"CATEGORIES ";
        // echo $_SESSION['usertype'];
if ($_SESSION['usertype']==1  ){
    echo "admin";
    echo"<a href='create_category.php'>create category</a>";
}
if (mysqli_num_rows($res) > 1){
    while($row = mysqli_fetch_assoc($res)){
        $cid = $row['id'];
        $title = $row['category_title'];
        // $description = $row['category_description'];

               echo"<a href='view_category.php?cid={$cid}' class='cat_link'>".$title."</a>";
                
             }
        }
        else{
            echo " THERE are no cat  available yet";
        }
    
        ?>
    </div>
</body>
</html>