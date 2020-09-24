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
              <a class="nav-link active" href="#">About</a>
              <a class="nav-link " href="login.php">Login</a>
              <a class="nav-link " href="#">Sign up</a>
            </nav>
          </div>

          </header>

          <main role="main" class="inner cover" style="padding-bottom: 10%;">
            <div class="col-md-8 offset-md-2">
              <h4 style="color: black;">About Us</h4>
              <p style = "text-align: justify; color: white">
                This website was developed by three likeminded individuals, when we saw the importance of early-education on a child's future. We believe 
                that getting access to information and quality preparation materials is paramount in a child's academic journey. <br><br>

                In the UK, at a young age children across the country will sit a examination (11+ exam) in order to gain entry into top-performing grammar schools. 
                Grammar Schools have educated the best and the brightest in our nation for decades. We believe this process ought to be democratised and 
                this oppertunity available to everyone. 
                <br><br>

                This platform offers a wide range of tools to maximize your child's chance of securing a place at grammar schools.
              </p>
               <div class = "container">
                  <div class="row">
                    <div class= "col-sm-5">
                      <div class="card text-white bg-dark mr-1">
                        <div class="card-body">
                          <h5 class="card-title">Practice questions & exams</h5>
                          <p class="card-text">2000 Question practice bank & 15 papers</p>
                        </div>
                      </div>
                    </div>

                  <div class= "col-sm-5">
                      <div class="card text-dark bg-light">
                        <div class="card-body">
                          <h5 class="card-title">Performance reviews</h5>
                          <p class="card-text">We give you a review of your performance</p>
                        </div>
                      </div>
                   </div>

                  </div>
                </div>
          </main>

          <?php require 'components/generalfooter.php';?>
  </body>
</html>