<?php

if( isset($_COOKIE["ElevenPlusID"]) && isset($_COOKIE["ElevenPlusUsername"]))
  {
   ///////////////////// TODO: CHECK THE PAGE IF COOKIES ARE LEGIT
?>

  <?php require 'components/mastheaduser.php';?>
  <main role="main" class="inner cover" style="padding-bottom: 10%; padding-top: 10%;">
    <br>
    <div class = "container">
      <div class="row">
        <div class= "col-sm-6">
          <a href="#" style="text-decoration: none;">
          <div class="card text-white bg-primary mr-1">
            <div class="card-body">
              <h5 class="card-title">Add Multiple Question</h5>
              <p class="card-text"></p>
            </div>
          </div>
          </a>
        </div>

        <div class= "col-sm-6">
          <a href="addmanualquestion.php" style="text-decoration: none;">
          <div class="card text-white bg-success mr-1">
            <div class="card-body">
              <h5 class="card-title">Add Manual Question</h5>
              <p class="card-text">Modify the existing questions in the question bank</p>
            </div>
          </div>
          </a>
        </div>
        
      </div>
      </div>

  </main>
  <?php require 'components/footeruser.php'; ?>


<?php 

}
else
{
  header("Location: ./login.php?unauthenticated");
}
?>
