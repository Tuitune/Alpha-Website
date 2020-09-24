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
      <!--///////////////////    Header  //////////////////////////////////-->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
       <div class="inner">
        <h3 class="masthead-brand"><a href="index.php" style="text-decoration: none;">Tuitune</a></h3>
         <nav class="nav nav-masthead justify-content-center">
         <a class="nav-link active" href="#">Home</a>
         <a class="nav-link" href="about.php">About</a>
         <a class="nav-link" href="login.php">Login</a>
         <a class="nav-link" href="signup.php">Sign up</a>
         </nav>
       </div>
      </header>
      <!--//////////////////////////////////////////////////////////////////-->
      <!--////////////////////////// BODY //////////////////////////////////-->
      <main role="main" class="inner cover" style="text-align: center;">

        

       <h1 class="cover-heading">Accelerate your child's future!</h1>
       <p class="lead" id="writing_paragraph"></p> <!--     Edit javascript/indexanimation.js to change the text presented here       -->
       <p class="lead">
       <a href="login.php" class="btn btn-dark"> Login </a>
       <a href="signup.php" class="btn btn-dark"> Sign up </a>
       </p>
      </main>
        <!--/////////////////////////////////////////////////////////////////-->
      <?php require 'components/generalfooter.php';?>
      <script type="text/javascript" src="javascript/indexanimation.js"></script>
  </body>
</html>