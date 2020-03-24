<!DOCTYPE html>
<html>
 <head>
  <title>LOGIN</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="log.css">
 </head>
 <body><div id="card"> 
  <div id="card-content">
  <div id="card-title">
    <h2>LOGIN</h2>
    <div class="underline-title"></div>
  </div>
</div>
<form action="logen.php" method="post" class="form">
  <label for="user-email" style="padding-top:22px">&nbsp;Username</label>
  <input
  id="user-username"
   class="form-content"
   type="text"
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
<input id="submit-btn" type="submit" name="submit" value="LOGIN" />
</form>
 </div>
 </body>
</html>
