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
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="about.php">About</a>
              <a class="nav-link active" href="#">Login</a>
              <a class="nav-link" href="signup.php">Sign up</a>
            </nav>
          </div>
     </header>

    <main role="main" class="inner cover" style="padding-bottom: 10%;">
      <div class="col-md-4 offset-md-4">
       <h1 class="h5 font-weight-normal">Login</h1>
          <br>
          <form action="php/loginaction.php" method="post">
            <label>Username:</label>
             <input type="text" class="form-control" name="username" placeholder="username">
             <br>
             <label>Password:</label>
             <input type="password" class="form-control" name="password" placeholder="password">
             <br>
             <button class="btn btn-dark btn-block" type="submit">Login</button>
          </form>
          <a class="btn btn-danger btn-block" href="signup.php">Sign up</a>
        </div>
    </main>

    <?php require 'components/generalfooter.php';?>
  </body>
</html>