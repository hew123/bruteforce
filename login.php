<!DOCTYPE html>
  <html>
    <head>
      <title lab4> </title>
      <link rel ="stylesheet" tyle="text/css" href="mycss2.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="/Users/hewhew/Desktop/INFR 3120U Lab/lab5/jquery.validate.js"></script>
      <script>
      $(document).ready(function(){

        $("#loginform").validate({
          rules:{
            username:{
              required: true,
              minlength: 5
            },
            password: "required"
          },
          messages:{
            username:{
              required: " Please enter username ",
              minlength: " Please enter at least 5 characters"
            },
            password:{
              required: " Please enter your password"
            }
          }

        });

      });

      </script>
      <meta charset="utf-8">
      <meta name ="viewport" content="width=device-width,initial-scale=1">
      <h1> Login Form </h1>
    </head>

    <body>
      <form id="loginform" action="process.php" method="post">

      <h2> Username </h2>
      <input id="username" type="text" name="username" placeholder="Enter your username">

      <h2> Password </h2>
      <input id="password" type="password" name="password" placeholder="Enter your password" maxlength=20>
      <br><br><br><br>

      <input type="submit" value="login"> <br>

      <input type="checkbox" name="remember" value="yes"checked> remember me <br>
    </body>
  </form>

  </html>
