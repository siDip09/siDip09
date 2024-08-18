<!DOCTYPE html>
<html>
    <title>Login</title>
    <body>
        <center>
        <img src="logo.jpg" alt="Big Bull" width="200vw" height="60">
        <meta name="viewport" content="width=device-width, initial-scale=1"></center><br>
        <center>
            <header><h3>All things finance,<br>
                right here.</h3></header>
          </center>
        <body background="bg.jpg.jpg"alt="Smiley face" width="40" height="100" style="border:5px solid rgb(2, 2, 2)">
    

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
    </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="login-form" method="POST" action="login_register.php">
            <div class="form-group">
                <label for="email_username">Email or Username:</label>
                <input type="text" id="email_username" name="email_username" placeholder="Email or Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login">Login</button>
            <p>You haven't any account? <button class="button signup" type="button"><p><a href="signup.php">Signup Now</a></button></p>
        </form>
    </div>
</body>
</html>