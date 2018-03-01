<?php

$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="user";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	session_start();
	
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
<table width="100%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="#">
                            <img height="48" src="../image/logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="#"><?php echo $_SESSION["name"]?></a>&nbsp;|
                        <a href="#">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="190" valign="top">
            <b>&nbsp;Account</b><hr />
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">View Profile</a></li>
                <li><a href="#">Change Profile Picture</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </td>
        <td valign="top">
            
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>