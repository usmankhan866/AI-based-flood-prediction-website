<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- <link rel="stylesheet" href="styles.css"> -->
 <?php 
 include("includes/contacts.php");
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
   
  ?>

<style>

  a{

    /* background-color:blue; */
    font-family: 'Times New Roman', Times, serif;
    font-size:31px;
    
  }

  #logo{

    padding-right: 15px;
  }

  #header{

    background-color: #F6F1F4;
  }

  .dropdown-item a:hover{

    border: 2px solid gray;
    border-radius: 8px;
    background-color: #FFF0F5;
    transform: scale(1.2);
    font-family: "Lucida Console", Courier, monospace;
  }

</style>
</head> 

<body>
  

  <header id="header" class="d-flex align-items-center">
  <!-- <link rel="stylesheet" href="styles.css"> -->
    <div class="container d-flex align-items-center justify-content-between">

    
      <h1 class="logo"><a class="nav-link scrollto" href="index.php"><img id="logo" src="assets/img/flood3.PNG" 
      alt="flood" width="17%" class="rounded-cirle"> SMART FLOOD </marquee> <span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
      
      <!-- <div class="container"> -->
         <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Nav">
          <span class="navbar-toggler-icon"></span>
          
          </button> -->

        <!-- <div class="collapse navbar-collapse" id="Nav">            -->
        <ul>
          <li><a class="nav-link scrollto <?php echo ($curPageName=='index.php')?'active':'' ?>" href="index.php">Main</a></li>
          <li></i><a class="nav-link scrollto" href="dashboard.php">Dashboard</a></li>
          <!-- <li class="nav-link scrollto"><a href="livedata"><span>Live Monitoring</span></a> -->
          <!-- <li class="nav-link scrollto"><a href="logs.php"><span>Device Logs</span></a> -->
            <li><a class="nav-link scrollto" href="date.php"><span>Devices Logs</span></a>
<!--           <li><a class="nav-link scrollto" href="#about">About</a></li> -->
   
              <!-- <li class="dropdown  "><a href="#"><span>Water Data</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="waterStorageLevel.php">Water Storage Levels</a></li>
                  <li><a href="#">Water Facts & History</a></li>
                  <li><a href="#">Get Involved</a></li>
                 
                </ul>
              </li> -->
       <!--    <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
        <!-- <li class="dropdown"><a href="#" class=" <?php echo ($curPageName=='rainfall_riverLevel.php')?'active':'' ?>"><span>Rainfall</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="rainfall_riverLevel.php">Rainfall & River Levels</a></li>
                  <li><a href="#">Environmental Issues</a></li>
                 
                 
                </ul>
              </li>

                <li class="dropdown"><a href="#"><span>Live Monitoring</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Today's Water Storage</a></li>
                  <li><a href="#">Today's Rainfall Levels</a></li> -->
                 
<!--                  
                </ul>
              </li> -->
        <!--   <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="h_rivers.php">Historical Data</a></li>
          <!-- <li><a class="nav-link scrollto" href="model.php" >AI Models</a></li> -->
          <li class="nav-item dropdown"><a style="text-decoration:none" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
            <span>AI Models</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a class="nav-link scrollto" href="#">ECGPANN</a></li>
              <li class="dropdown-item"><a class="nav-link scrollto" href="#">MC-CGPRNN</a></li>
              <li class="dropdown-item"><a class="nav-link scrollto" href="#">LSTM</a></li>
          
            </ul>
          </li>
         <!--  <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto   <?php echo ($curPageName=='contact.php')?'active':'' ?> " href="contact.php" >Contact</a></li> -->
        </ul>

    
        <i class="bi bi-list mobile-nav-toggle"></i>
        </div>

</div>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  </body>
  </html>