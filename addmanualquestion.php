<?php

if( isset($_COOKIE["ElevenPlusID"]) && isset($_COOKIE["ElevenPlusUsername"]))
  {
   ///////////////////// TODO: CHECK THE PAGE IF COOKIES ARE LEGIT
?>

  <?php require 'components/mastheaduser.php';?>
  <main role="main" class="inner cover" style="padding-top: 5%;">
     <div class="col-md-6 offset-md-3">
       <h1 class="h5 font-weight-normal">Question</h1>
          <br>
          <form action="php/addmanualquestionaction.php" method="get"> <!--  PUT THE CORRECT FORM HERE.  -->


            <label>Question:</label>
             <textarea class="form-control" id="Question" name="Question" rows="3"></textarea>

             <br>
             
             <label>Answer:</label>
             <input type="text" class="form-control" name="Answer" placeholder="">
             <br>

             <label>Explanation:</label>
             <textarea class="form-control" id="Explanation" name="Explanation" rows="3"></textarea>

             <br>
             <button class="btn btn-primary" type="submit">Submit</button>
             <button class="btn btn-danger" type="reset">Clear</button>
          </form>
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
