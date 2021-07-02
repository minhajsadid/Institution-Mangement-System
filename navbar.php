<?php
 session_start();
  if ($_SESSION['name']=="Akash kumar sushil"){?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
     <h1 class="logo mr-auto"><a href="home.php">InIS</a></h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li ><a href="home.php">Home</a></li>
            <li><a href="viewNotice.php">G-Notice</a></li>
            <li><a href="ebook.php">Elibrary</a></li>
            <li><a href="addContact.php">Contact</a></li>
            <li><a href="index.php">Find Result</a></li>
          </ul>
        </nav>
        <div class="dropdown show">
      <a class="get-started-btn" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['name']?></a>
      <div class="dropdown-menu" >
              <div class="modal-dialog" role="document" >
                <div class="modal-content" >
                <img src="./images/user_male.png"  style="margin-left: 8.5rem!important;" width="65px" height="65px"/>s
                    <h6 style="margin-left: 6rem!important;"> <?php echo $_SESSION['name']?></h6> 
                  <p class = "text-center"><?php echo $_SESSION['email']?></p>
                  <div class="modal-footer">
                    <button  class="get-started-btn"><a href="./logout.php" style="color:white;">logout</a></button>
                  </div>
              </div>
            </div>
      </div>
    </div>
      </div>
    </header>
  <?php } 
  else{?>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="home.php">InIS</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="viewNotice.php">G-Notice</a></li>
          <li><a href="ebook.php">Elibrary</a></li>
          <li class="drop-down"><a href="">Admin</a>
            <ul>
              <li><a  href="addLocation.php">Add Area </a></li>
              <li><a href="addSCM.php">Add Institution </a></li>
              <li><a href="updateSCM.php">Update Institution </a></li>
              <li><a href="addBooks.php">Add Books</a></li>
              <li><a href="deleteBooks.php">Delete Books</a></li>
              <li><a href="addnotice.php">Add Notice</a></li>
              <li><a href="deleteNotice.php">Delete Notice</a></li>
            </ul>
          </li>
          <li><a href="viewContact.php">Contact Info</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <div class="dropdown show">
      <a class="get-started-btn" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['name']?></a>

      <div class="dropdown-menu" >
               
              <div class="modal-dialog" role="document">
                <div class="modal-content" >
                <img src="./images/user_male.png"  style="margin-left: 8.5rem!important;" width="65px" height="65px"/>
                    <h6 style="margin-left: 6rem!important;"> <?php echo $_SESSION['name']?></h6> 
              
                  <p class = "text-center"><?php echo $_SESSION['email']?></p>
                  <div class="modal-footer">
                   
                    <button  class="get-started-btn"><a href="./logout.php" style="color:white;">logout</a></button>
                  </div>
              </div>
            </div>
      </div>
    </div>
    </div>
  </header>

 <?php }?>
>






  