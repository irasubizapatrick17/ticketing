<?php
if(isset($_POST['submit']))
{
	$u=$_POST['username'];
	$p=$_POST['password'];

	include("connect.php");

	
	switch($_POST['type'])
	{
		case "Select User Type":
				header('Location: admin.php');

					// $select_user_query=$con ->query("SELECT * FROM `client` WHERE `username`='$u' AND `password`='$p'");
			
					// if(mysqli_num_rows($select_user_query)==1)
					// {
					// 	include 'client.php';
					// 	//session_start();
					// 	$_SESSION['type']="client";
					// 	$_SESSION['username']=$u;
					// 	//header('Location: client.php?name='.$u);
					// }
					// else
					// {
					// 	echo "Invalid Username and Password !!";
					// 	unset($_POST['submit']);
					// 	$error_login=1;
					// 	include 'index.php';
					// }
					
					// break;
		case "admin":
					$select_user_query=$con ->query("SELECT * FROM `admin` WHERE `username`='$u' AND `password`='$p'");
					if(mysqli_num_rows($select_user_query)==1)
					{
						include 'admin.php';
						//session_start();
						$_SESSION['type']="admin";
						$_SESSION['username']=$u;
						//header('Location: client.php?name='.$u);
					}
					else
					{
						echo "Invalid Username Or Password !!";
						unset($_POST['submit']);
						$error_login=1;
						include 'index.php';
					}
					break;
		case "employee":
					$select_user_query=$con ->query("SELECT * FROM `employee` WHERE `username`='$u' AND `password`='$p'");
					if(mysqli_num_rows($select_user_query)==1)
					
					{
						include 'employee.php';
						//session_start();
						$_SESSION['type']="employee";
						$_SESSION['username']=$u;
						//header('Location: client.php?name='.$u);
					}
					else
					{
						echo "Invalid Username and Password !!";
						unset($_POST['submit']);
						$error_login=1;
						include 'index.php';
					}
					break;
		case "user":
					$select_user_query=$con ->query("SELECT * FROM `user` WHERE `username`='$u' AND `password`='$p'");
					if(mysqli_num_rows($select_user_query)==1)
					
					{
						include 'user_dashboard.php';
						//session_start();
						$_SESSION['type']="employee";
						$_SESSION['username']=$u;
						//header('Location: client.php?name='.$u);
					}
					else
					{
						echo "Invalid Username and Password !!";
						unset($_POST['submit']);
						$error_login=1;
						include 'index.php';
					}
					break;
	}
}

	
?>