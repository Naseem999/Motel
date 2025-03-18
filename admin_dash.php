<?php
session_start();
if (isset($_SESSION['admin_username'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include_once 'partial/head.php';
        ?>

        <title>Motel-Admin DashBord</title>
    </head>

    <body style="background-color: #f1f5f6;">
        <div class="row" style="margin-bottom: 7vh;">
            <nav class="show-on-small" style=" display: none;  background-color:transparent ; backdrop-filter: blur(40px); box-shadow: 10px 10px 10px rgba(46,54,68,0.03);">
                <div class="nav-wrapper">
                    <div class="row  z-depth-5" style=" background-color: white; ">
                        <div class="col s9 m9" style="height: 10vh;">
                            <a href="h7.php"> <img class="responsive-image" src="img/logo1.png" style=" height:9vh; 
                 width:30vw; margin: 0.5;   object-fit:contain;  ">
                            </a>
                        </div>
                        <div class="col s3 m3 valign-wrapper" style="height: 10vh;">
                            <a href="" data-target="mobile-demo" style="  color: black;  " class="sidenav-trigger   ">
                                <i class="material-icons">menu</i>
                            </a>
                        </div>

                    </div>

            </nav>
        </div>
        <div class="sidenav z-depth-5 sidenav-fixed" style="background: linear-gradient(145deg, #ffffff, #d9dddd);
" id="mobile-demo">
            <div class=" ">
                <div class="col s12 m12 l12" style=" border-bottom: 1px solid ligh;">
                    <img class="responsive-image" src="img/logo.svg" style=" height:7vh; 
                 width: 100% ;  margin: 0.7vh;   object-fit:contain;  ">
                    <hr style="    width: calc(100% - 4 0px); height:0px; border: 1px solid lightgray;">
                </div>
            </div>
            <div class="row" style="margin: 20px;">
                <ul>
                    <li id="dash_link" class="active">
                        <a onclick="dash();" href="admin_dash.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li id="profile_link">
                        <a onclick="profile();" href="#">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li id="_link">
                        <a onclick="todo();" href="#tables">
                            <i class="material-icons">content_paste</i>
                            <p>Todo List</p>
                        </a>
                    </li>
                    <li id="_link">
                        <a onclick="employees();" href="#tables">
                            <i class="material-icons">people</i>
                            <p>Employees</p>
                        </a>
                    </li>
                    <li>
                        <a onclick="noti();" href="#!  ">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li id="s_menu_link">
                        <a onclick="show_menu();" href="#menu">
                            <i class="material-icons">restaurant_menu</i>
                            <p> Menu</p>
                        </a>
                    </li>
                    <li id="a_menu_link">
                        <a onclick="add_menu();" href="#add_to_menu">
                            <i class="material-icons">add_box</i>
                            <p>Add To Menu</p>
                        </a>
                    </li>
                    <li id="orders_link">
                        <a onclick="orders();" href="#orders">
                            <i class="material-icons">attach_money</i>
                            <p>Orders</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>

        <div class="row side_sec">
            <div class="col s12 m9 l9 right" style=" margin-left: 0px;">
                <div id="dash" style="display: block;">
                    <?php
                    include_once 'admin/dash.php';
                    ?>
                </div>
                <div id="add_to_menu" style="display: none;">
                    <?php
                    include_once 'admin/add_menu_item.php';
                    ?>
                </div>
                <div id="menu" style="display: none;">
                    <?php
                    include_once 'admin/menu.php';
                    ?>
                </div>
                <div id="employee" style="display: none;">
                    <?php
                    include_once 'admin/employee.php';
                    ?>
                </div>
                <div id="profile" style="display: none;">
                    <?php
                    include_once 'admin/profile.php';
                    ?>
                </div>
                <div id="todo" style="display: none;">
                    <?php
                    include_once 'admin/todo.php';
                    ?>
                </div>
                <div id="noti" style="display: none;">
                    <?php
                    include_once 'admin/notifications.php';
                    ?>
                </div>
                <div id="orders" style="display: none;">
                    <div class="row hide-on-med-and-down">
                        <p  style="text-align: center; color:#a3a3a3; font-size: 3vh; margin: 0px;">Orders</p>
                        <hr style="width: 40px; margin-bottom: 5px;">
                    </div>
                    <?php
                    include_once 'admin/orders.php';
                    ?>
                </div>
            </div>
        </div>

        <?php
        include_once 'partial/scripts.php';
        ?>
    </body>

    </html>
<?php
} else {
    header("Location:admin_log.php?error=Login As Admin");
}
?>
<script>
    function add_menu() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "none";
        dash.style.display = "none";
        profile.style.display = "none";
        noti.style.display = "none";
        orders.style.display = "none";
        menu.style.display = "none";
        add_to_menu.style.display = "block";

    }

    function show_menu() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "none";
        dash.style.display = "none";
        profile.style.display = "none";
        noti.style.display = "none";
        orders.style.display = "none";
        menu.style.display = "block";
        add_to_menu.style.display = "none";

    }

    function orders() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "none";
        dash.style.display = "none";
        profile.style.display = "none";
        noti.style.display = "none";
        orders.style.display = "block";
        menu.style.display = "none";
        add_to_menu.style.display = "none";

    }

    function noti() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "none";
        dash.style.display = "none";
        profile.style.display = "none";
        noti.style.display = "block";
        orders.style.display = "none";
        menu.style.display = "none";
        add_to_menu.style.display = "none";


    }

    function profile() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "none";
        dash.style.display = "none";
        profile.style.display = "block";
        noti.style.display = "none";
        orders.style.display = "none";
        menu.style.display = "none";
        add_to_menu.style.display = "none";

    }

    function dash() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "none";
        dash.style.display = "block";
        profile.style.display = "none";
        noti.style.display = "none";
        orders.style.display = "none";
        menu.style.display = "none";
        add_to_menu.style.display = "none";


    }

    function todo() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "none";
        todo.style.display = "block";
        dash.style.display = "none";
        profile.style.display = "none";
        noti.style.display = "none";
        orders.style.display = "none";
        menu.style.display = "none";
        add_to_menu.style.display = "none";


    }

    function employees() {
        let add_to_menu = document.getElementById('add_to_menu');
        let menu = document.getElementById('menu');
        let orders = document.getElementById('orders');
        let noti = document.getElementById('noti');
        let profile = document.getElementById('profile');
        let dash = document.getElementById('dash');
        let todo = document.getElementById('todo');
        let employee = document.getElementById('employee');
        employee.style.display = "block";
        todo.style.display = "none";
        dash.style.display = "none";
        profile.style.display = "none";
        noti.style.display = "none";
        orders.style.display = "none";
        menu.style.display = "none";
        add_to_menu.style.display = "none";


    }
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });


    $(document).ready(function() {
        $(' li').on('click', function() {
            var clicked = $(this);
            $('ul li').each(function() {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                }
            });
            $(this).addClass('active');
        });
    });
    AOS.init();
</script>
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
<?php
if (isset($_GET['msg'])) {
?>
    <script>
        var toastHTML = "<span style='color:#66bb6a' ><?php echo $_GET['msg']; ?></span>"
        var toastElement = document.querySelector('.toast');
        M.toast({
            html: toastHTML,


        });
    </script>
<?php
}
?>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .side_sec {
        margin: 30px;
    }

    @media only screen and (max-width: 600px) {
        .side_sec {
            margin: 0px;
        }
    }

    li>a {
        border-radius: 5px !important;
    }

    li {
        border-radius: 5px !important;
    }

    li.active>a {
        background-color: #1c1c1c;
        box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
    }

    li.active>a:hover {
        background-color: #1c1c1c;
        box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
    }

    li.active>a>p {
        color: #eee;
    }

    li.active>a>i {
        color: #eee !important;
    }
</style>