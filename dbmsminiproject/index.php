<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>

<body style="background-color: aqua; text-align: center;">



<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        Welcome <strong><?php echo $_SESSION['username']; ?></strong> 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="index.php?logout='1'" style="color: red;">logout</a>
  <br><br>
    <a href="location.html"><button style="padding: 25px; background-color: lightgrey;">RESTAURANT PLACES</button></a>
    <br><br>
    <a href="chef.html"><button style="padding: 25px; background-color: lightgrey;">CHEF INFORMATION</button></a>
   <br><br>
     <a href="foods.html"><button style="padding: 25px; background-color: lightgrey;">FOOD INFORMATION</button></a>
   <br><br>
     <a href="customers.html"><button style="padding: 25px; background-color: lightgrey;">CUSTOMER REVIEW</button></a>
     <br><br>
      <a href="search.html"><button style="padding: 25px; background-color: lightgrey;">VIEW INFORMATION</button></a>  
     <br><br>
      <a href="searchres.html"><button style="padding: 25px; background-color: lightgrey;">SEARCH</button></a>
      <br><br>
      <a href="book.html"><button style="padding: 25px; background-color: lightgrey;">BOOK</button></a>
    <?php endif ?>
</div>
		
</body>
</html>