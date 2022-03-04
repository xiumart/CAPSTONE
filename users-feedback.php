<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets\css\user-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <title>RNL Vision Care</title>
  <script src="script.js" charset="utf-8"></script>
  <link rel="shorcut icon" type="img/png" href="assets\images\logo.png">
</head>

<body>
  <header>
    <section class="head">
      <div class="container flex1">
        <div class="left flex1">
          <div class="logo">
            <h3>RNL Vision Care</h3>
          </div>

          <div class="search flex">
          
          </div>
          <div class="select">
            
          </div>
        </div>

        <div class="right flex ">
          
          </div>

         

          
          <div class="admin flex">
            <img src="assets\images\a1.jpg" alt="">
            <div class="text flex">
              <label>Firstname</label>
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>

          
        </div>
      </div>
    </section>

    <section class="menu">
      <div class="container">
        <div class="navbar">
          <nav>
            <ul id="menuitem">
              <li>
                <a href="users.php">
                  <i class="fa fa-medkit"></i>
                  <h5>Check-ups</h5>
                </a>
              </li>
              <li>
                <a href="users-appointment.php">
                  <i class="fa fa-calendar"></i>
                  <h5>Appoinments</h5>
                  
                </a>
              </li>
              <li>
                <a href="users-feedback.php">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i>
                  <h5> Feedback Us</h5>
            
                </a>
              </li>

            </ul>
          </nav>
          <label class="fa fa-bars" onclick="menutoggle()"></label>
        </div>
      </div>
    </section>
  </header>

  <script>
    var menuitem = document.getElementById("menuitem");
    menuitem.style.maxHeight = "0px";

    function menutoggle() {
      if (menuitem.style.maxHeight == '0px') {
        menuitem.style.maxHeight = "30vh"
      } else {
        menuitem.style.maxHeight = "0px"
      }
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 50);
    })
  </script>

  <section class="home">
  
  </section>

  <section class="table">
    <div class="container">

      <h3>Feedback Us !</h3>
      <div class="map-content-9">
                    <form action="" method="post">
                        <div class="twice">
                             <h3>Subject</h3>
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                        </div>
                        <h3>Message</h3>
                        <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                            required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                        </div>
                    </form>
                </div>
  </section>


  <footer>
    <div class="container flex1">
      <span>2022 © RNL Vision Care.</span>
     
    </div>
  </footer>
  <!-- chart js-->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js" charset="utf-8"></script>
  <!-- chart js-->
</body>

</html>