<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Do</title>
</head>

<body>

    <!-- <form action="register.php" method="POST" style="background-color: darkslategray;">
        <h2>REGISTER</h2>

        <label>User Name </label>

        <input type="text" name="username" placeholder="User Name" required><br>

        <label>Password </label>

        <input type="password" name="password" placeholder="Password" required><br>

        <label>Email</label>

        <input type="email" name="email" placeholder="email" required><br>

        <button type="submit" name="submit">Login</button>
    </form> -->


    <!-- Section: Design Block -->
    <form action="register.php" method="POST">
    <section class="background-radial-gradient overflow-hidden">
        <style>
 .background-radial-gradient {
    background-color: hsl(326deg 100% 29%);
    background-image: radial-gradient(650px circle at -0% 0%, #8c175a 15%, hsl(323deg 100% 30%) 35%, hsl(321deg 89% 41%) 75%, hsl(323deg 100% 36%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(331deg 80% 41%) 15%, hsl(330deg 76% 44%) 35%, hsl(320deg 81% 43%) 75%, hsl(324deg 74% 41%) 80% transparent 100%);
 }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        The best offer <br />
                        <span style="color: hsl(323, 82%, 13%) ">for an interactive forum</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-12 mb-4 user">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="username" required  />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3" class="form-control" name="email" required/>
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control" name="password" required />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <!-- Checkbox -->


                                <!-- Submit button -->
                                <button type="submit" class="btn5 btn-primary btn-block mb-4" name="submit" >
                                    Sign up
                                </button>
                                <div class="text-center">
        <p>Have an account <?php echo" <a href= 'notindex.php'>Login</a>" ?></p> 
      </div>

</section>
</form>
</body>

</html>