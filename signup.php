<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style-signUp.css"> 
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <body>
    <div style="background-color:rgba(179,120,211,0.4);color:white;border-radius:8px;width:1366px;top:0px;border:3px solid white;">  
    logo here
    <button id="button6">
        Login/Sign Up
    </button>
	<button id="button1">
        About Us
    </button>
    <button>
        Contact US
    </button>
    <button id="button3">
        Shop
    </button>
    <button id="button4">
        Gallery
    </button>
    <button id="button5">
        Home
    </button>
        <br><br><br><br>
    </div>

    <!--javascript-->
    <script type="text/javascript" src="javascript/ripple.js"></script>
    <!--javascript-->
        <div style="border:3px solid white;font-size:48px;font-family:Mr De Haviland;margin-left:480px;position:absolute;background-color:transparent;border-radius:8px;top:90px;" >::...Your Journey Starts Here...::</div>
        <br><br><br>
    <div style="border:3px solid white;width:550px;height:100%;margin-left:400px;border-radius:10px;background-color:rgba(179,120,211,0.4);font-family:cursive;color:white;">
        <form method="POST" action="signup.php" enctype="multipart/form-data">
        <input type="text"  name="username" autofocus required=""><br>
        <input type="email"  name="email" required=""><br>
        <input type="text"  name="contact" required=""><br>
        <input type="date"  name="dob" required=""><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio">Female<br>
        <input type="password"  name="password" required=""><br>
        <input type="password"  required=""><br><br>
        <input type="submit" placeholder="Sign Up" name="submit" required=""><br>
        </form>
    </div>
    <?php
    /*placeholder="Username" placeholder="chetanya@email.com"  placeholder="Contact No." placeholder="age" placeholder="Password" placeholder="Confirm_password"*/
        include("connect.php");
        if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $contact=$_POST['contact'];
            $dob=$_POST['dob'];
            
                echo "you have successfully signed up";
            $insert_query="INSERT INTO `login`( `username`, `email`, `password`, `contactnumber`, `dob`) VALUES ('$username','$email','$password','$contact','$dob')";
            if(mysql_query($insert_query)){
                echo "<center><h1>Post Successfully Uploaded</h1></center>";
            }
        } 
    ?>
    </body>
</html>