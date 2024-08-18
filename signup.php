<!DOCTYPE html>
<html>
<head>
    <title>Signup portal</title>
    <body>
        <center>
        <img src="logo.jpg" alt="Big Bull" width="200vw" height="60">
        <meta name="viewport" content="width=device-width, initial-scale=1"></center><br>
        <center>
            <header><h3>All things finance,<br>
                right here.</h3></header>
          </center>
          <!DOCTYPE html>
<html>
<head>
    <body background="bg.jpg.jpg"alt="Smiley face" width="40" height="100" style="border:5px solid rgb(2, 2, 2)">
	<title>Signup Page</title>
    <style>
    
        .btn {
          background-color: rgb(14, 239, 255);
          border: none;
          color: white;
          padding: 12px 50px;
          font-size: 16px;
          cursor: pointer;
        }
		#btn{
			text-align: center;
		}
        
        /* Darker background on mouse-over */
        .btn:hover {
          background-color: rgb(248, 248, 248);
        }
    </style>
	<div id="btn">
    <button class="btn"><i class="fa fa-home"></i><p><a href="index.php">Home</a></p></button>
    <button class="btn"><i class="fa fa-bars"></i><p><a href="calculator.html">Calculator</a></p></button>
    <button class="btn"><i class="fa fa-close"></i><p><a href="Bm.html">Best Mutual Funds</a></p></button>
    <button class="btn"><i class="fa fa-folder"></i><p><a href="contact.html">Contact Us</a></p></button>
    <button class="btn"><i class="fa fa-home"></i><p><a href="signup.php">Signup/Login</a></p></button>
    <button class="btn"><i class="fa fa-home"></i><p><a href="admin.html">Admin Option</a></p></button>
    <button class="btn"><i class="fa fa-home"></i><p><a href="upgrade.html">About Us</a></p></button>
	</div>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		
		.container {
			width: 50%;
			margin: 40px auto;
			background-color: #fff;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.form-group {
			margin-bottom: 20px;
		}
		
		.label {
			display: block;
			margin-bottom: 10px;
		}
		
		.input-field {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		
		.button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		.button:hover {
			background-color: #3e8e41;
		}
		
		.login-button {
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Signup</h2>
		<form method="POST" action="login_register.php">
			<div class="form-group">
				<label class="label" for="username">Name:</label>
				<input type="text" id="username" class="input-field"  name="username" required>
			</div>
			<div class="form-group">
				<label class="label" for="email">Email:</label>
				<input type="email" id="email" class="input-field" name="email" required>
			</div>
			<div class="form-group">
				<label class="label" for="password">Password:</label>
				<input type="password" id="password" class="input-field" name="password" required>
			</div>
			<button class="button" type="submit" name="register" href="index.php">Signup</button>
			<p>Already have an account? <button class="button login-button" type="button"><p><a href="login.php">Login</a></button></p>
		</form>
	</div>
 

</body>
</html>