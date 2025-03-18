<?php
include_once 'head.php';
$Err="";
if(isset($_POST['signup_submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $f_name=mysqli_real_escape_string($con,$_POST['f_name']);
    $l_name=mysqli_real_escape_string($con,$_POST['l_name']);
    $bio=mysqli_real_escape_string($con,$_POST['bio']);
    
    if(empty($username) ||empty($pass)||empty($email)||empty($f_name)||empty($l_name)||empty($bio))
	{
		$Err = "Fill All the Feilds";
        header("Location:../account.php?error=$Err");
        exit();
		
	}else{
 
        $username = test_input($username);
        // check if Uname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
          $Err = "Only letters and white space allowed";
          header("Location:../account.php?error=$Err");
          exit(); 
        }

        $email = test_input($email);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $Err = "Invalid email format";
          header("Location:../account.php?error=$Err");
          exit(); 
        }

      $f_name = test_input($f_name);
        // check if Uname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$f_name)) {
          $Err = "Only letters and white space allowed";
          header("Location:../account.php?error=$Err");
          exit(); 
        }
      
        $l_name = test_input($l_name);
        // check if Uname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {
          $Err = "Only letters and white space allowed";
          header("Location:../account.php?error=$Err");
          exit(); 
        }

        $l_name = test_input($l_name);
        // check if Uname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {
          $Err = "Only letters and white space allowed";
          header("Location:../account.php?error=$Err");
          exit(); 
        }

        $sql="SELECT * FROM user WHERE email='$email';";
				$result=mysqli_query($con,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0)
				{
					header("Location:../account.php?error=User Already exsist");
					exit();
				}else{
					//hashing password
					$hashedpwd=password_hash($pass,PASSWORD_DEFAULT);
					//INSERT USER INTO DATABASE
					$sql="INSERT INTO user(username, pass, email, f_name,l_name, bio) VALUES('$username','$hashedpwd','$email','$f_name','$l_name','$bio');";
					mysqli_query($con,$sql);
					header("Location:../account.php?sucsess");
					
					exit();
				}

      
      
    }
        
     
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>