<?php
session_start();
include_once 'head.php';
$Err = "";

if (isset($_POST['login_submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if (empty($uname) || empty($pass)) {
        $Err = "Fill All the Feilds To Login";
        header("Location:../admin_log.php?error=$Err");
        exit();
    } else {
        
            $sql = "SELECT * FROM admin_tab WHERE username='$uname';";
            $result = mysqli_query($con, $sql);
            $resultch = mysqli_num_rows($result);
            if($resultch < 1){
                $Err = "Invalid Login";
                header("Location:../admin_log.php?error=$Err");
                exit();
            }else{
                if ($row = mysqli_fetch_assoc($result)) {
                    
                    //dehashing of password user type
                    $hashedPwdCheck = password_verify($pass , $row['pass']);
                    if($hashedPwdCheck == false)
                    {
                        $Err = "Invalid Login Password Not matched";
                        header("Location:../admin_log.php?error=$Err");
                    }elseif($hashedPwdCheck == true){
                        //log in the user in website here creating session verible for user
                        $name=$row['id'];
                        $_SESSION['admin_id']=$row['id'];
                        $_SESSION['admin_username']=$row['username'];
                        $_SESSION['admin_email']=$row['email'];
                        header("Location:../admin_dash.php?login=You Are Logged In Successfully&id=$name");
                        exit();
                    }
                }
            }
        
    }

  
}

