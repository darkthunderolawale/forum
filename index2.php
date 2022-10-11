<?php session_start();
include("connect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css?v=<?php echo time(); ?>">

    <title>Document</title>
</head>
<body>
    <div class="log">

        
        <form  action = 'login_parse.php' method ='post' class="logins">
            <!-- Email input -->
            <div class="login">
          <h1>Login Page</h1>
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" class="form-control" name = 'username' />
        <label class="form-label" for="form2Example1" name = 'username'>Username</label>
      </div>
    
      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name = 'password' />
        <label class="form-label" for="form2Example2" >Password</label>
      </div>
    
      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me </label>
          </div>
        </div>
    
        <div class="col">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>
    
      <!-- Submit button -->
      <div class="btn3">
          <input type="submit" class="btn btn-primary btn-block mb-4 btn4 name = 'submit'" value="login">
      </div>
    
      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <?php echo" <a href= 'index.php'>Register</a>" ?></p> 
      </div>
      </div>
    </form>
</div>



</body>

</html>