<?php
$userprofile = $_SESSION['username'];
if($userprofile == true){

}else{
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <header>
      <div class="container">
        <img src="images/pondiBG.jpg" alt="" />
        <div class="navbar">
          <div class="logo">
            <img src="images/pondiLogo.png" alt="" />
          </div>

          <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="http://localhost/php_codes/department/about.php">About Us</a></li>
              <li><a href="">

              <?php
              session_start();
              echo $_SESSION['username'];
              ?>
            
              </a></li>
              <li><a href="http://localhost/php_codes/department/logout.php">Logout</a></li>
            </ul>

            <i class="fa fa-user-circle-o icon"></i>
          </nav>
        </div>
      </div>
    </header>

    <!-- ------------------------header part completed------------------- -->

    <div class="details">
      <h1>COMPUTER SCIENCE <br />DEPARTMENT</h1>

      <div class="para">
        <div class="left">
            <p>
                The Department aims at imparting quality education in Computer Science &
                Engineering and Information Technology through various post-graduate
                programmes. It also offers an atmosphere conducive for research scholars
                for pursuing research in various advanced areas of Computer Science,
                Engineering and Information Technology. The Computer Science students’
                association, PIXEL, provides opportunities to sharpen the skills of
                students by organizing lectures and students meet. The alumni of the
                department deliver lectures on latest topics periodically for updating
                the skill sets of the students.
              </p>
        </div>

        <div class="right">
            <img src="images/hod.jpeg" alt=""> <br>
            <span>HEAD OF THE DEPARTMENT</span>
            <span>Dr. S. K. V. Jayakumar</span> 
            <span>+91-413-2654-875</span>


        </div>

      </div>

      
    </div>
  </body>
</html>

