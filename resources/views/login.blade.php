<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login to Tutor Raya</title>
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
    @if (session('save'))
            <script>alert("Register successfully");</script>
        @endif
        @if (session('error'))
            <script>alert("Failed to register");</script>
        @endif

      <div class="w3-bar w3-black w3-padding-16" id="navBar">
        <a href="{{ url('/')}}" class="w3-bar-item w3-button w3-wide ">
          <b>Tutor Raya</b>
        </a>
        <!-- Right-sided navbar links -->
        <div class="w3-right">
          <a href="{{ url('login')}}" class="w3-bar-item w3-button">LOGIN</a>
        </div>
      </div>


  <div class="w3-content w3-padding-top-64" style="max-width: 900px">
     <!-- Header -->
      <div class="w3-header w3-container">
      <div class="w3-col m6 w3-padding-large w3-center">
        <img
          src="../images/Logo.png"
          alt="Tutor Raya Logo"
          width="300"
        />
      </div>
      <!-- col -->

      <div class="w3-col m6 w3-padding-small">
          <div class="w3-container w3-padding-32"> 
              <div class="w3-card-4 w3-round w3-padding">
                <form name="loginForm" action="{{route('login.post') }}" method="post">
                {{csrf_field()}}

                    <h3 class="w3-center">Login</h3>
                    <p>
                        <label><b>Email</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="email" name="email" id="idemail"
                            placeholder="Enter your email" required>
                            @if ($errors->has('email'))
                            <span class="w3-red">{{ $errors->first('email') }}</span>
                        @endif
                    </p>
                    <p>
                        <label><b>Password</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="password" name="password" id="idpassword"
                            placeholder="Enter your password" required>
                            @if ($errors->has('password'))
                            <span class="w3-red">{{ $errors->first('password') }}</span>
                        @endif
                    </p>
                    <p>
                        <input class="w3-check" name="rememberme" type="checkbox" id="idremember">
                        <label>Remember Me</label>
                    </p>
                    <p>
                        <button class="w3-btn w3-black w3-round-xxlarge w3-block" type="submit" name="submit" value="login">Login</button>
                    </p>
                    <div class="w3-center"> <p>New to Tutor Raya? <a href="{{ url('register')}}"><b>Register now !</b> </a></p></div>
                    </form>
              </div>
          </div>
      </div>
      
      <!-- col -->
        </div>
     </div>
   </div>
    <!-- header -->
    <div class="w3-padding-top-64"></div>
    

  <!-- footer -->
  <footer class="fixedFooter w3-row-padding w3-padding-16 w3-center w3-black">
    <h6>© 2022 Tutor Raya</h6>
  </footer>


</body>

</html>
