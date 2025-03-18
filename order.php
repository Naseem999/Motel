<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Account</title>
</head>

<body>



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
        <div class="col s12 m6 l6">
            
        </div>
        <div class="col s12 m5 l5  ">
            <div class="f_card col s12 m12 l12   " style=" border:1px solid lightgray; padding:25px;">
                <div class="card-content white-text center-align">
                    <form method="post" action="partial/login.php">

                        <input placeholder="Username" name="uname" id="first_name" type="text" style="text-align: center; border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>

                        <input  placeholder="Password"  name="pass" id="first_name" type="password" class="validate" style="
                     background-color: #f9f9f9; text-align: center; border:1px solid #ededed; width: 99%; ">
                        <br><br>
                        <button name="login_submit" type="submit" style=" background-color: #1c1c1c;  margin-top: 10px; width: 100%; height: 2.7em; padding: 2px; font-weight: bold; " class=" waves-effect waves-light btn ">Log in</button>
                    </form>

                    <p style="color: #1c1c1c;">OR</p>
                    <a href="order.php" class="btn waves-effect waves-light " type="submit" style=" width: 100%;  background-color: #1c1c1c;  font-weight: 600;" name="action">
                    Order As Guest
                    </a>
                    
                </div>
            </div>
        </div>

    </div>

    <?php
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