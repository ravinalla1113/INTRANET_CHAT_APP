<?php 
  session_start();

  if (!isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat App - Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" 
	      href="css/style.css">
	<link rel="icon" href="https://cdn4.iconfinder.com/data/icons/internet-and-social-networking/32/i22_internet-512.png">
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<form method="post" 
	 	      action="app/http/signup.php"
	 	      enctype="multipart/form-data">
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		<img src="https://th.bing.com/th/id/R.8e4d0655f395aea1b51e4013261b07b1?rik=CTFRmV573cQG6w&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f3%2fSign-Up-Button-PNG-Pic.png&ehk=%2bow10vtvHZXjy33BOpsQNTNgFVgV0Brm3vDbynrFQ%2bA%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" 
	 		     class="w-25">
	 		<h3 class="display-4 fs-1 
	 		           text-center">
	 			       SIGN UP</h3>   
	 		</div>

	 		<?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } 
              
              if (isset($_GET['name'])) {
              	$name = $_GET['name'];
              }else $name = '';

              if (isset($_GET['username'])) {
              	$username = $_GET['username'];
              }else $username = '';
			?>

	 	  <div class="mb-3">
		    <label class="form-label">
		           Name</label>
		    <input type="text"
		           name="name"
		           value="<?=$name?>" 
		           class="form-control">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           User name</label>
		    <input type="text" 
		           class="form-control"
		           value="<?=$username?>" 
		           name="username">
		  </div>


		  <div class="mb-3">
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  
		  <button type="submit" 
		          class="btn btn-primary">
		          Sign Up</button>
		  <a href="index.php">Login</a>
		</form>
	 </div>
</body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>