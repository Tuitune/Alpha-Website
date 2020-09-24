<?php 

if( isset($_COOKIE["ElevenPlusID"]) && isset($_COOKIE["ElevenPlusUsername"]))
  {
      ////////Check wheather the ID and Username actually match...................NEED TO FINISH IT OFF.

    header("location: user.php"); ////Already logged in so take them to the user page. 
  }

?>


<html lang="en">
  <head>
    <?php require 'components/head.php';?>
  </head>

  <body>
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
         <header class="masthead mb-auto">
           <div class="inner">
            <h3 class="masthead-brand"><a href="index.php" style="text-decoration: none;">Tuitune</a></h3>
            <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link " href="index.php">Home</a>
              <a class="nav-link" href="about.php">About</a>
              <a class="nav-link " href="login.php">Login</a>
              <a class="nav-link active" href="#">Sign up</a>
            </nav>
          </div>

          </header>

          <main role="main" class="inner cover" style="padding-bottom: 10%;">
            <div class="col-md-4 offset-md-4">
              <h1 class="h5 font-weight-normal">Sign Up</h1>
               <br>
              <form action="php/signupaction.php" method="post">
                <label>Select your username:</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
                <br>
                <label>Email:</label>
                <input type="email" class="form-control" name="email" placeholder="E-mail">
                <br>
                <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <br>
                <label>Retype Password:</label>
                <input type="password" class="form-control" name="retyped_password" placeholder="Retype password">
                <br>
                <button class="btn btn-primary btn-block" type="submit">Sign up</button>
              </form>
              <a class="btn btn-dark btn-block" href="login.php">Login</a>
            </div>
          </main>

          <?php require 'components/generalfooter.php';?>
  </body>
</html>