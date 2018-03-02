<?php

$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="user";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	session_start();
	
	
	//echo $cookie_name;
	//echo $_COOKIE['c_userName'];
	//echo "asdas";
	
	$userName = $_COOKIE['c_userName'];
	$password = $_COOKIE['c_password'];
	$current_pass = mysqli_real_escape_string($conn,$_POST['password']);
	$new_pass = mysqli_real_escape_string($conn,$_POST['password2']);
	$confirm_pass = mysqli_real_escape_string($conn,$_POST['password3']);

	if(isset($_COOKIE['c_userName']) )
	{
		if(isset($_POST['change_btn']))
		{
			if ($current_pass == $password)
			{
				if ($password2 == $password3)
				{
					
					$sql = "update user set password = '$new_pass' where userName = '$userName'";
					mysqli_query($conn,$sql);
					
				}
				else
				{
					echo "New and confirm password doesn't match";
				}
			}
			else
			{
				echo "Current password doesn;t match";
			}
		}
	}
	else
	{
		echo "Session Out. PLease log in again";
	}
	//echo $_SESSION["name"]
	//$_SESSION["name"]= $row['name'];
		//$_SESSION["email"]= $row['email'];
		//$_SESSION["userName"]= $row['userName'];
		//$_SESSION["password"]= $row['password'];
		//$_SESSION["gender"]= $row['gender'];
		//$_SESSION["dd"]= $row['dd'];
		//$_SESSION["mm"]= $row['mm'];
		//$_SESSION["yy"]= $row['yy'];
		
		//$userName = $row['userName'];
		//$password = $row['password'];


	?>
	
	
	<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form method="Post" action="change_password.php">
        <table>
            <tr>
                <td><font size="3">Current Password</font></td>
				<td>:</td>
                <td><input type="password" name="password"/></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
				<td>:</td>
                <td><input type="password" name="password2"/></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
				<td>:</td>
                <td><input type="password" name="password3"/></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" name = "change_btn" value="Submit" />
    </form>
</fieldset>