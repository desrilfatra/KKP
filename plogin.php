<?php
	session_start();
	if (isset($_SESSION['login']))
		header('Location: index.php');
	// include 'lhast.php'; 
	include 'configdb.php';
			$result = $mysqli->query("select * from user WHERE user = '".$_POST['user']."' and pass = '".$_POST['pass']."'");
			if(@$result->num_rows != 0){
				while ($row = $result->fetch_assoc()) {
					$_SESSION['login'] = 'user';
					$_SESSION['user'] = $row['user'];
					$_SESSION['pass'] = $row['pass'];
				}
				header('Location: index.php');
			}
			else{
				$_SESSION['error']=1;
				header('Location: login.php');
			}
?>