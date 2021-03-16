<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<body style="background-color: palevioletred; text-align: center;">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
      </div>
      <br>
  	<div class="input-group">
  	  <label>  Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <br>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      </div>
      <br>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
      </div>
      <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
      <br>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>