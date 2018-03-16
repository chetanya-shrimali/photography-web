<html>
<body>
<form action="<?php echo "$current_file";?>" method="post">
	<input type="text" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password">
	<input type="submit" name="submit" placeholder="submit">
</form>
</body>
</html>
<?php
   // include("connect.php");
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        //$password_hash=md5($password)    a way to protect password

        $query="SELECT `userid` FROM `login` WHERE `username`='$username' AND `password`='$password'";
        if($query_run=mysql_query($query)){
            $query_rows=mysql_num_rows($query_run);
            if($query_rows==0){
                echo "username or password incorrect";
            }else if($query_rows==1){
                $user_id=mysql_result($query_run,0,'userid');//looking in from row 0 to..... going in id column (research on it)
                $_SESSION['user_id']=$user_id;
                header('Location: index.php');
            }
        }
    }
?>