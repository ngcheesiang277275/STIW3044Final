
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutor Raya</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link href="../css/style.css" rel="stylesheet"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Top navigation bar -->
        <div class="w3-bar w3-black w3-padding-16" id="navBar">
          <a href="{{ url('/')}}" class="w3-bar-item w3-button w3-wide"> <b>Tutor Raya</b></a>
          <!-- Right-sided navbar links -->
          <div class="w3-right ">
            <a href="{{ url('login')}}" class="w3-bar-item w3-button">LOGIN</a>
          </div>
        </div>


    <div class="w3-content w3-padding-top-64 w3-padding-bottom-32" style="max-width: 900px">
      <!-- Header -->
      <div class="w3-header w3-container">
        <div class="w3-col m6 w3-padding-large w3-center">
          <img
            src="images/Logo.png"
            alt="Tutor Raya Logo"
            width="300"
          />
        </div>
        <!-- col -->

        <div class="w3-col m6 w3-padding-small">
            <br/>
          <h1>
            Tutor Raya
          </h1>
          <br />
          <p class="w3-justify">
            Established in the year of 2022. Tutor Raya provides a platform for the tutors 
            to teach courses that they are experienced with. Thousands of users are available
            in Tutor Raya and still growing!
          </p>
          <br>
          <div class="w3-center w3-btn w3-round-xxlarge w3-black"> <a href="{{ url('login')}}"><b>LOGIN</b> </a></div>
          <div class="w3-center w3-btn w3-round-xxlarge w3-black"> <a href="{{ url('register')}}"><b>REGISTER</b> </a></div>

        </div>
        <!-- col -->
      </div>
      </div>
    </div>
      <!-- header -->

      <div class="w3-row-padding w3-light-grey w3-center w3-margin-top">
      </br>
      <h1>WHY CHOOSE TUTOR RAYA?</h1>
      </br>
      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:300px">
        <h4>Manage Courses</h4><br>
        <i class="fa fa-sliders w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <p>Easy to manage your courses</p>
        </div>
      </div>
      
      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:300px">
        <h4>Thousands of Users</h4><br>
        <i class="fa fa-users w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <p>Spread your knowledge here!</p>
        </div>
        </br>
      </div>
      
      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:300px">
        <h4>Easy and Simple</h4><br>
        <i class="fa fa-cogs w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <p>Minimalist operation needed</p>
        </div>
      </div>
      </div>      
      


    <div class=" w3-container">
      <div class="w3-col m6 w3-padding-large w3-center">
        <img
          src="images/joinus.png"
          alt="Join us.png"
          width="300"
        />
      </div>
      <!-- col -->

      <div class="w3-col m6 w3-padding-64 w3-center">
          <br/>
          <h1>DON'T HESITATE</h1>
        <h2>JOIN US NOW</h2>
          <div class="w3-center w3-btn w3-round-xxlarge w3-black"> <a href="{{ url('login')}}"><b>LOGIN</b> </a></div>
          <div class="w3-center w3-btn w3-round-xxlarge w3-black"> <a href="{{ url('register')}}"><b>REGISTER</b> </a></div>

      </div>
      <!-- col -->
    </div>
    </div>
  </div>
  <br />
  <br />
    <!-- footer -->
    <footer class=" w3-row-padding w3-padding-16 w3-center  w3-black">

      <h6>© 2022 Tutor Raya</h6>
    </footer>
  </body>
</html>
