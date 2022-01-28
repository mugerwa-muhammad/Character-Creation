<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
  <div class="container">
    <h1>Teacher Register | Signup</h1><hr>
    <div class="registration_form">
      <form action="register.php" method="post">
            <input type="text" name="firstname" placeholder="Enter your firstname" required="required"><br>
            <input type="text" name="lastname" placeholder="Enter your lastname" required="required"><br>
            <input type="text" name="username" placeholder="Enter your username" required><br>
            <input type="email" name="email" placeholder="Enter your email" required="required"><br>
            <input type="text" name="password1" placeholder="Enter your password" required="required"><br>
            <input type="password" name="password2" placeholder="Verify password" required="required"><br>
            <input type="submit" id="signup_button"name="signup_button" value="submit">
       </form>
    </div>
  </div>
    
  
</body>
</html>