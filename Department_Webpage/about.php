<?php

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
    <link rel="stylesheet" href="about.css">
    
  </head>
  <body style="background:lightblue;">
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
    </div>

    <div class="teachers">
        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2022/12/Sukhvinder.jpg" alt="" >
            <h6>Dr. Sukhvinder Singh</h6>
            <p>AI/Ml</p>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2022/06/ProfilePhoto-Krishnapriya.jpg" alt="" >
            <h6>Dr. Krishnapriya</h6>
            <p>Data Structure</p>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2022/05/ProfilePhoto-S.L.Jayalakshmi.jpg">
            <h6>Dr. S. L. Jayalakshmi</h6>
            <p>Database</p>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/K-S-Kuppusamy-Dr.-K-S-Kuppu-Samy.jpeg" alt="" >
            <h6>Dr. K. S. Kuppusamy</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/Sathya-M.jpg" alt="">
            <h6>Dr. M. Sathya</h6>
        </div>


        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/Shanthi-Bala-Shanthi-Bala-P.jpg" alt="">
            <h6>Dr. P. Shanthi Bala</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/uma-photo-good-Uma-V.jpg" alt="">
            <h6>Dr. V. Uma</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/seenivasan-profile.jpeg" alt="">
            <h6>R. P. Seenivasan</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/ProfilePhoto-S.K.V.Jayakumar.jpeg" alt="">
            <h6>Dr. S. K. V. Jayakumar</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/suresh-joseph-profile.jpeg" alt="">
            <h6>Dr. K. Suresh Joseph</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/s-ravi.png" alt="">
            <h6>Dr. S. Ravi</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/nandhini-profile.jpeg" alt="">
            <h6>Dr. M. Nandhini</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/DSC_1112-copy-Sivasathya-Sundaram-scaled-e1593754969122-1151x1536.jpg" alt="">
            <h6>Dr. S. Sivasathya</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/subramaniam-csc-profile.jpeg" alt="">
            <h6>Dr. R. Subramanian</h6>
        </div>

        <div class="teach">
            <img src="https://www.pondiuni.edu.in/wp-content/uploads/2020/06/Chithralekha-Balamurugan-1152x1536.jpg" alt="">
            <h6>Dr. T. Chithralekha</h6>
        </div>
        <div class="info">
          <h1>ABOUT</h1>
          <p>Pondicherry University, also known as PU, is a central research university located in Kalapet, Pondicherry in Union Territory of Puducherry, India. It was established by an Act of Parliament in 1985 by the Department of Higher Education, Ministry of Education, Government of India</p>
        </div>

    



    </div>
  </body>
</html>



