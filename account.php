<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Account</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <div class="row center-align " style=" height:45vh; background: url(img/account_header_bg.jpg) no-repeat 50% 50%;
     background-size: cover;">

        <div class="conatiner  " style="height:45vh;background-color:rgba(0,0,0 ,0.5) ;  padding:10px;">
            <h5 class=" wobble-hor-bottom" style="color: #f9f9f9; font-size: 10vh; margin-top: 13vh;   font-family: 'Poppins', sans-serif;">
                ACCOUNT</h5>
        </div>

    </div>

    <div class="row form_section">
        <?php
        if (isset($_GET['error'])) {
        ?>
            <script>
                var toastHTML = "<span style='color:#e57373' ><?php echo $_GET['error']; ?></span>"
                var toastElement = document.querySelector('.toast');
                M.toast({
                    html: toastHTML,
                    
                  
                });
            </script>
        <?php
        }
        ?>
        <div class="col s12 m6 l6 ">
            <div class="f_card col s12 m12 l12   " style=" border:1px solid lightgray; padding:25px;">
                <a style="padding: 6px; font-size:1.7vh; background-color: #1c1c1c; color:#f9f9f9">ALREADY A MEMBER</a>
                <h1 style="color:#727475; font-size: 3.5vh; margin-top: 17px;">Log In</h1>
                <div class="card-content white-text">
                    <form method="post" action="partial/login.php">
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;font-weight: 700;">Username</span>
                        <br>
                        <input name="uname" id="first_name" type="text" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ; font-weight: 700;">Password</span>
                        <br>
                        <input name="pass" id="first_name" type="password" class="validate" style="
                     background-color: #f9f9f9; border:1px solid #ededed; width: 99%; ">
                        <br><br>
                        <label>
                            <input  type="checkbox" class="filled-in" checked="checked" />
                            <span>Remember me</span>
                        </label>
                        <br><br>
                        <button name="login_submit" type="submit" style=" background-color: #1c1c1c;  margin-top: 10px; width: 100%; height: 2.7em; padding: 2px; " class=" waves-effect waves-light btn ">Log in</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="f_card col s12 m12 l12   " style=" border:1px solid lightgray; padding:25px;">
                <a style="padding: 6px; font-size:1.7vh; background-color: #1c1c1c; color:#f9f9f9">I DONT HAVE AN ACCOUNT</a>
                <h1 style="color:#727475; font-size: 3.5vh; margin-top: 17px;">Registration</h1>
                <div class="card-content white-text">
                    <form method="post" action="partial/signup.php">
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;font-weight: 700;">Username</span>
                        <br>
                        <input name="username" id="first_name" type="text" class="validate" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ; font-weight: 700;">Password</span>
                        <br>
                        <input name="pass" id="first_name" type="password" class="validate" style="
                     background-color: #f9f9f9; border:1px solid #ededed; width: 99%; ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;font-weight: 700;">Email</span>
                        <br>
                        <input name="email" id="first_name" type="email" class="validate" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;font-weight: 700;">Frist Name</span>
                        <br>
                        <input name="f_name" id="first_name" type="text" class="validate" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;font-weight: 700;">Last Name</span>
                        <br>
                        <input name="l_name" id="first_name" type="text" class="validate" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;font-weight: 700;">About/bio</span>
                        <br>
                        <textarea name="bio" id="first_name" type="text" style="border:1px solid #ededed;width: 99%;  overflow-y: auto;    height:10vh; 
                     background-color: #f9f9f9;; "></textarea>
                        <br><br>
                        <button name="signup_submit" type="submit" style=" background-color: #1c1c1c;  margin-top: 10px; width: 100%; height: 2.7em; padding: 2px; " class=" waves-effect waves-light btn ">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>

</body>

</html>
<style>
    .form_section {
        margin: 50px;
    }



    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 600px) {
        .form_section {
            margin: 0px;
        }
    }

    [type="checkbox"].filled-in:checked+span:not(.lever):after {
        border: 2px solid #1c1c1c !important;
        background-color: #1c1c1c !important;
    }

    [type="checkbox"]+span:not(.lever) {
        line-height: 20px;
    }
</style>