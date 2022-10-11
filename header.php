<?php session_start();
if ( isset($_SESSION['username'])) {

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css?v=<?php echo time(); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: purple;">Gangimo</a>
            <p class="text-primary"></p>
                </ul>
                <form class="d-flex">

                    <button class="btn btn-outline-success text-light btn-light me-2 button style='hover:red;'" type="submit">  <?php echo "<p class = 'btn_p' style = background-color: none;> <a href = 'logout.php'style='text-decoration: none;'>Logout</a>"?>
</button>
                </form>
            </div>
        </div>
    </nav>

    </div>
    </body>
    </html>
    <?php
}else{
    header("location:index2.php");
    exit();
}
     ?>
