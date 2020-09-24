
<?php

 if( isset($_COOKIE["ElevenPlusID"]) && isset($_COOKIE["ElevenPlusUsername"]))
  {
      ////////Check wheather the ID and Username actually match...................NEED TO FINISH IT OFF.
    $user = $_COOKIE["ElevenPlusUsername"]; 
?>

  <?php require 'components/mastheaduser.php';?>
  <main role="main" class="inner cover" style="padding-bottom: 10%; padding-top: 10%;">
    <br>
    <div class = "container">
      <div class="row">
        <div class= "col-sm-4">
          <a href="addquestionmain.php" style="text-decoration: none;">
          <div class="card text-white bg-info mr-1">
            <div class="card-body">
              <h5 class="card-title">Add Questions</h5>
              <p class="card-text"> Add new questions to the question database </p>
            </div>
          </div>
          </a>
        </div>

        <div class= "col-sm-4">
          <a href="#" style="text-decoration: none;">
          <div class="card text-white bg-success mr-1">
            <div class="card-body">
              <h5 class="card-title">Modify Questions</h5>
              <p class="card-text">Modify the existing questions in the question bank</p>
            </div>
          </div>
          </a>
        </div>
        
        <div class= "col-sm-4">
          <div class="card text-white bg-danger mr-1">
            <div class="card-body">
              <h5 class="card-title">User Information</h5>
              <p class="card-text">View users, modify user privileges/membership, etc. </p>
            </div>
          </div>
        </div>

      </div>

      <br>
     

      </div>

    <br>

  </main>
  <?php require 'components/footeruser.php'; ?>


<?php 

}
else
{
  header("Location: ./login.php?unauthenticated");
}
?>
