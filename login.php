<?php

$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="user";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	
	
	//unset($_COOKIE['$userName']);
	if(isset($_COOKIE['c_userName']) )
	{
		header("location: loggedin_layout.php");
			
	}
	if(isset($_POST['login_btn']))
	{
		session_start();
				
		$id = mysqli_real_escape_string($conn,$_POST['user_name']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		
		
		$result = mysqli_query($conn,"SELECT * FROM user WHERE userName =  '$id' AND password = '$password'") 
				  or die("Failed to fetch the data".mysql_error());
		$row = mysqli_fetch_array($result);
		$_SESSION["name"]= $row['name'];
		$_SESSION["email"]= $row['email'];
		$_SESSION["userName"]= $row['userName'];
		$_SESSION["password"]= $row['password'];
		$_SESSION["gender"]= $row['gender'];
		$_SESSION["dd"]= $row['dd'];
		$_SESSION["mm"]= $row['mm'];
		$_SESSION["yy"]= $row['yy'];
		
		$userName = $row['userName'];
		$password = $row['password'];
		
		//$c_userName = "user";
		//$c_password = "password";
		
		
	
		
		if ($row['userName'] == $id && $row['password'] == $password)
		{
			if(isset($_POST['remember']))
			{
				setcookie('c_userName',$userName, time()+(86400 *30), "/");
				setcookie('c_password',$password, time()+(86400 *30), "/");
				
				header("location: loggedin_layout.php");
			}
			else
			{
				unset($_COOKIE[$userName]);
				header("location: loggedin_layout.php");
			}
			
			
			
		}
		
		
		else 
		{
		
		echo "user name and password doesn't match";
		}
		
	}
	
	

?>


<fieldset>
    <legend><b>LOGIN</b></legend>
    <form method="Post" action="login.php">
        <table>
            <tr>
                <td>User Name</td>
				<td>:</td>
                <td><input type="text" name="user_name"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox" value="value1">Remember Me
		<br/><br/>
        <input type="submit" name= "login_btn" value="Login">        
		<a href="forgot_password.html">Forgot Password?</a>
    </form>
</fieldset>