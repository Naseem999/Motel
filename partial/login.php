<?php
session_start();
include_once 'head.php';
$Err = "";

if (isset($_POST['login_submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if (empty($uname) || empty($pass)) {
        $Err = "Fill All the Feilds To Login";
        header("Location:../account.php?error=$Err");
        exit();
    } else {
        
            $sql = "SELECT * FROM user WHERE username='$uname';";
            $result = mysqli_query($con, $sql);
            $resultch = mysqli_num_rows($result);
            if($resultch < 1){
                $Err = "Invalid Login";
                header("Location:../account.php?error=$Err");
                exit();
            }else{
                if ($row = mysqli_fetch_assoc($result)) {
                    
                    //dehashing of password user type
                    $hashedPwdCheck = password_verify($pass , $row['pass']);
                    if($hashedPwdCheck == false)
                    {
                        $Err = "Invalid Login Password Not matched";
                        header("Location:../account.php?error=$Err");
                    }elseif($hashedPwdCheck == true){
                        //log in the user in website here creating session verible for user
                        $_SESSION['username']=$row['username'];
                        $_SESSION['email']=$row['email'];
                        $_SESSION['f_name']=$row['f_name'];
                        $_SESSION['l_name']=$row['l_name'];


                        header("Location:../index.php?login=You Are Logged In Successfully");
                        exit();
                    }
                }
            }
        
    }

  
}

