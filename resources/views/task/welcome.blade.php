<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-library</title>
  <link href="{{asset('css/index.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href=" {{ asset('steex/layouts/assets/images/favicon.ico')}}">
</html>

</head>
<body>
<div class="content">
    <div class="welcome">
        Welcome to The Federal Polytechinc Ile-Oluji.
    </div>
   <a href="{{route('login')}}"> <button class="btnlogin-popup" id="con">Student Login</button> </a>
    <a href="{{route('home')}}"><button class="btnlogin-popup" id="con">Librarian Login</button> </a>
</div>

   {{-- <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span> --}}

        {{-- <div class="form-box login">
            <h2>Login</h2> --}}
            {{-- <form name="me" action="login.php" method="post">
                <div class="input-box">
                <div class="error">
                <?php
                      if(isset($_GET['error'])){  ?>

                      <h6 style="color:red; text-align:center; padding-top:-10px;"><?=$_GET['error']?></h6><?php }?>
                </div>


                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" required name="Email">
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password"  id="password" required  name="Pass">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

               <button type="Submit" class="btn"  onclick="me()">Login</button>

                <div class="login-register">
                    <p>Don't have an account?</p>
                    <p><a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>--}}


 <!--<div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="post" name="me">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="Username" required name="Username">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="Email">
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="Pass">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required>I agree to terms and conditions</label>
                </div>

                <a href="../firstclass/index.html"><button type="Submit" class="btn">Register</button></a>

                <div class="login-register">
                    <p>Already have an account?</p>
                    <p><a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>-->
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>