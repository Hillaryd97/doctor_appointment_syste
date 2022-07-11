<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  
<div class="grid">

  <form class="login-box" action="validation.php" method="POST">
    <h1 style="margin-bottom: 20px; text-align: center;">Login</h1>
    <label style="margin-top: 15px;"> Matriculation Number</label> <br>
    <input type="text" placeholder="Enter your Matriculation number" name="user"><br>
    <label style="margin-top: 15px;"> Password</label> <br>      
    <input type="password" placeholder="Enter your password" name="pwd"><br>
    <p>Not a user? <a href="signup.php">Register here</a></p>
    <button type="submit" style="margin-left: 6vw;" class="button-login">Login</button><br><br>
    <a href="admin\login.php" style="margin-left: 9.7vw; margin-top:1vw;">Login as Admin</a><br>
  </form>
 
</div>
</body>
</html>
