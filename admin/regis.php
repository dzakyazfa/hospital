<!DOCTYPE html>
<html>
 <head>
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body><div id="card"> 
  <div id="card-content">
  <div id="card-title">
    <h2>REGISTER</h2>
    <div class="underline-title"></div>
  </div>
</div>
<form action="registrasi.php" method="post" class="form"> <label for="user-id" style="padding-top:13px">&nbsp;ID</label>
  <input
   id="user-id"
   class="form-content"
   type="id"
   name="id"
   autocomplete="on"
   required />
  <div class="form-border"></div>
<label for="user-password" style="padding-top:22px">&nbsp;Username</label>
  <input
   id="user-username"
   class="form-content"
   type="username"
   name="username"
   required />
  <div class="form-border"></div>
  <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
  <input
   id="user-password"
   class="form-content"
   type="password"
   name="password"
   required />
  <div class="form-border"></div>
<input id="submit-btn" type="submit" name="submit" value="REGISTER" />
</form>
 </div>
 </body>
</html>
