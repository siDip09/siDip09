<?php
require('connection.php');
#for Register
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `register_user` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                echo"
                <script>
                   alert('$result_fetch[username] -Username already taken');
                   window.location.href='index.php';
                </script>
                "; 
            }
            else
            {
                echo"
                <script>
                   alert('$result_fetch[email] -Email already registered');
                   window.location.href='index.php';
                </script>
                ";  

            }

        }
        else
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `register_user`(`username`, `email`, `password`) VALUES ('$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($con,$query))
            {
                echo"
                <script>
                   alert('Registration Successful!');
                   window.location.href='index.php';
                </script>
                "; 

            }
            else
            {
                echo"
                <script>
                   alert('Cannot Run Query');
                   window.location.href='index.php';
                </script>
                "; 
            }
         
        }
         
    }
    else
    {
        echo"
        <script>
           alert('Cannot Run Query');
           window.location.href='index.php';
        </script>
        "; 
    }
}

#for login

if(isset($_POST['login']))
{
    $query="SELECT * FROM `register_user` WHERE `username`='$_POST[email_username]' OR `email`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);
    
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password']))
            {
                echo"
                <script>
                   alert('Log In Successfully!');
                   window.location.href='index.php';
                </script>
                "; 
            }
            else
            {
                echo"
                <script>
                alert('Incorrect Password');
                window.location.href='login.php';
                </script>
                ";
            }
        }
        else
        {
            echo"
            <script>
            alert('Email or Username not registered');
            window.location.href='signup.php';
            </script>
            ";
        }
    }
    else
    {
        echo"
        <script>
            alert('Cannot run query');
            window.location.href='index.php';
        </script>
        "; 
    }

}


?>