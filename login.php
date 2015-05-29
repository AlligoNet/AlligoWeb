<?php
		//ini_set('display_errors', 1); error_reporting(E_ALL);
		if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['password'])){
			if(!empty($_POST['email'])){
				//register new user
				$useremail = clean($_POST['email']);
				if($useremail !== $_POST['email'] || !filter_var($useremail, FILTER_VALIDATE_EMAIL)){
					$emailerr = "Please enter a valid email address.<br>";
				}
				elseif(strlen($useremail) > 50){
					$emailerr = "Please use an email address under 50 characters.<br>";
				}
			}
			$username = clean($_POST['name']);
			if($username !== $_POST['name']){
				$nameerr = "Please enter a valid username.<br>";
			}
			elseif(strlen($username) > 50){
				$nameerr = "Please use a user name under 30 characters.<br>";
			}
			$password = $_POST['password'];
			if(strlen($password) > 253){
				$pwerr = "Please use a password under 253 characters.<br>";
			}
			if(!isset($emailerr) && !isset($nameerr) && !isset($pwerr)){
				include 'config/db_credentials.php';
				$conn = mysqli_connect($dbhost , $dbuser, $dbpassword, $dbname);
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				if(isset($useremail)){
					//register new user
					$searchName = $conn->prepare("SELECT username FROM radcheck_crypt WHERE username=?");
					$searchName->bind_param("s", $username);
					$searchName->execute();
					$nameFind = $searchName->get_result();
					$searchName->close();
					if($nameFind->num_rows > 0){
						$nameerr = "A user with that name already exists.<br>";
					}
					$searchEmail = $conn->prepare("SELECT useremail FROM raduseremail WHERE useremail=?");
					$searchEmail->bind_param("s", $useremail);
					$searchEmail->execute();
					$emailFind = $searchEmail->get_result();
					$searchEmail->close();
					if($emailFind->num_rows > 0){
						$emailerr = "A user with that email address already exists.<br>";
					}
					if(!isset($emailerr) && !isset($nameerr)){
						//user does not exist; continue
						$insertUser = $conn->prepare("INSERT INTO radcheck (username, attribute, op, value) VALUES (?, 'Cleartext-Password', ':=', ?)");
						/*
						* inb4 >storing plaintext in db
						* We know; compatibility issues prevent normal use of hashed passwords for the VPN
						* Replacement key-based workaround backend is in place; one client update away from implementation.
						*/
						$insertUser->bind_param("ss", $username, $password);
						$insertUser->execute();
						$insertUser->close();
						$pwhash = password_hash($password, PASSWORD_BCRYPT);
						$insertUserCrypt = $conn->prepare("INSERT INTO radcheck_crypt (username, attribute, op, value) VALUES (?, 'Crypt-Password', ':=', ?)");
						$insertUserCrypt->bind_param("ss", $username, $pwhash);
						$insertUserCrypt->execute();
						$insertUserCrypt->close();
						$insertEmail = $conn->prepare("INSERT INTO raduseremail (username, useremail) VALUES (?, ?)");
						$insertEmail->bind_param("ss", $username, $useremail);
						$insertEmail->execute();
						$insertEmail->close();
						$insertGroup = $conn->prepare("INSERT INTO radusergroup (username, groupname) VALUES (?, 'user')");
						$insertGroup->bind_param("s", $username);
						$insertGroup->execute();
						$insertGroup->close();
						$err = "Registration successful.<br>";
						$_SESSION["name"] = $username;
					}
				}
				else{
					//log in existing user
					$searchUser = $conn->prepare("SELECT radcheck_crypt.value, radusergroup.groupname FROM (radcheck_crypt LEFT JOIN radusergroup ON radcheck_crypt.username = radusergroup.username) WHERE radcheck_crypt.username=?");
					$searchUser->bind_param("s", $username);
					$searchUser->execute();
					$userFind = $searchUser->get_result();
					$searchUser->close();
					if($userFind->num_rows === 0){
						$nameerr = "A user with that name was not found.<br>";
					}
					else{
						$userResult = $userFind->fetch_assoc();
						$pwresult = $userResult['value'];
						if(password_verify($password , $pwresult)){
							if($userResult['groupname'] === 'banned'){
								$err = "You are banned<br>";
							}
							else{
								$err = "Logged in successfully<br>";
								$_SESSION["name"] = $username;
								$_SESSION["status"] = $userResult['groupname'];
							}
						}
						else{
							$pwerr = "Incorrect password.";
						}
					}
				}
				$conn->close();
			}
			else{
				$err = "Problems were found with your input:<br>";
			}
		}
		elseif(isset($_GET['action'])){
			if($_GET['action'] == 'logOut'){
				session_unset();
				session_destroy();
				$err = "Logged out successfully<br>";
			}
		}
		function clean($input){
			return htmlspecialchars(stripslashes(trim($input)));
		}
	?>