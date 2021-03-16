<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  
<body style="background-color: palevioletred; text-align: center;">
<h1 style="text-align: center;">Restaurant Management System</h1>
  <div class="header">
  	<h2>Login</h2>
  </div>
  
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
          <input type="text" name="username" >
      </div>
      <br>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
      </div>
      <br>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>