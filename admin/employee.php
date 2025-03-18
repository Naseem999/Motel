<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body>
        <?php
        $sql = "SELECT * FROM chefs ";
        $chefs_count = 0;
        $result = mysqli_query($con, $sql);
        $resultch = mysqli_num_rows($result);
        if ($resultch < 1) {
            $chefs_count = 0;
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $chefs_count++;
            }
        }

        // employee count
        $sql = "SELECT * FROM employee ";
        $employee_count = 0;
        $result = mysqli_query($con, $sql);
        $resultch = mysqli_num_rows($result);
        if ($resultch < 1) {
            $employee_count = 0;
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $employee_count++;
            }
        }
        ?>
        <!-- main section -->
        <div class="row main_sec">
            <div class="col s12 m6 l6" style="padding-top: 0px;">
                <a href="#chefs" style="color: #a3a3a3;">
                    <div class="card z-depth-3 " style="border-radius: 8px;">
                        <div class="card-content white-text">
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col s6 m6 l6 " style=" margin-top: -4em;">
                                    <div class="card" style="  height: 7em;      background: linear-gradient(60deg, #ffa726, #fb8c00); box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); border-radius: 5px;">
                                        <div class="card-image cneter-align">
                                            <p style="text-align: center;">
                                                <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-utensils fa-3x"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6 m6 l6" style="margin-top: 0px">
                                    <p style="font-size:0.8em; color:#999999;text-align: right; margin-top: -0.5em">Chefs</p>
                                    <h1 style="font-size:2em; font-weight: lighter; color:#3C4858;text-align: right; margin-top: 5px;">
                                        <?php echo $chefs_count; ?></h1>
                                </div>
                            </div>
                            <hr style="margin-top: 0px;">
                            <p style="color: #a3a3a3;margin-top: 1em;"> Add Chef <a href="#add_chef" class="modal-trigger"> <i style=" color: gray;" class="right material-icons  ">person_add</i></a></p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ============================================================================================================================== -->
            <!--add Note Modal Structure -->
            <div id="add_chef" class="modal md" style="border-radius: 10px;">
                <div class="modal-content">
                    <form action="admin/crud_chef.php" method="post">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="name" placeholder="Name" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="email" placeholder="Email" required type="email" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="pass" placeholder="Password" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="speciality" placeholder="speciality" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="restaurant_name" placeholder="restaurant_name" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="salary" placeholder="salary" required type="number" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>

                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;margin-top: 1em;">
                                    <button name="add_chef_submit" type="submit" class="waves-effect waves-light btn  " style=" 
                             background-color: #1c1c1c;
            box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57); text-align: left;">
                                        Add
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- ============================================================================================================================== -->
            <!-- add Employee -->
            <div class="col s12 m6 l6" style="padding-top: 0px;">
            <a href="#employees" style="color: #a3a3a3;">
                <div class="card z-depth-3 " style="border-radius: 8px;">
                    <div class="card-content white-text">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s6 m6 l6 " style=" margin-top: -4em;">
                                <div class="card" style="  height: 7em;  background: linear-gradient(60deg, #66bb6a, #43a047);    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); border-radius: 5px;">
                                    <div class="card-image cneter-align">
                                        <p style="text-align: center;">
                                            <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-users fa-3x"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s6 m6 l6" style="margin-top: 0px">
                                <p style="font-size:0.8em; color:#999999;text-align: right; margin-top: -0.5em">Other Employees</p>
                                <h1 style="font-size:2em; font-weight: lighter; color:#3C4858;text-align: right; margin-top: 5px;">
                                    <?php echo $employee_count; ?></h1>
                            </div>
                        </div>
                        <hr style="margin-top: 0px;">
                        <p style="color: #a3a3a3;margin-top: 1em;">Add Employee<a href="#add_employee" class="modal-trigger"> <i style=" color: gray;" class="right material-icons  ">person_add</i></a></p>

                    </div>
                </div>
            </a>
            </div>
            <!-- ============================================================================================================================== -->
            <!--add Employee Modal Structure -->
            <div id="add_employee" class="modal md" style="border-radius: 10px;">
                <div class="modal-content">
                    <form action="admin/crud_employee.php" method="post">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="e_name" placeholder="Name" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="email" placeholder="Email" required type="email" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="pass" placeholder="Password" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <div class="col s1 m1 l1 "></div>
                                <div class="col s10 m10 l10">
                                    <select name="department" class="browser-default">
                                        <option value="" disabled selected>Select Department</option>
                                        <option value="Accounting and Finance">Accounting and Finance.</option>
                                        <option value="HR">HR</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Marketing">Waiters</option>
                                        <option value="Purchasing">Purchasing</option>
                                    </select>
                                </div>
                                <div class="col s1 m1 l1 "></div>

                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="restaurant_name" placeholder="restaurant_name" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;">
                                    <input name="salary" placeholder="salary" required type="number" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                </p>
                            </div>

                            <div class="input-field col s12 m12 l12">
                                <p style="text-align: center;margin-top: 1em;">
                                    <button name="add_employee_submit" type="submit" class="waves-effect waves-light btn  " style=" 
                             background-color: #1c1c1c;
            box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57); text-align: left;">
                                        Add Employee
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- ============================================================================================================================== -->
        </div>


        <!-- chefs -->
        <div class="row">
            <div class="col s12 m12 l12" id="chefs" style="margin-top: 5em;">
                <div class="card z-depth-3 cards " style="border-radius: 8px;">
                    <div class="card-content " style="padding: 18px;">
                        <div class="card" style=" padding: 17px;background: linear-gradient(60deg, #ffa726, #fb8c00); 
                         margin-top: -4em;   box-shadow:0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);   border-radius: 5px;">
                            <div class="card-image white-text cneter-align">
                                <p class="valign-wrapper" style="text-align: left;   font-size: 2em; ">
                                    Chefs
                                </p>
                                <p class="valign-wrapper" style="text-align: left;  font-size: 1.8vh; ">
                                    All The Records related to chef can be edited and Deleted Here
                                </p>
                            </div>
                        </div>
                        <table class="responsive-table striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Spaciality</th>
                                    <th>Salary</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody">
                                <?php
                                $show = false;
                                $sql = "SELECT * FROM chefs order by id desc ";
                                $result = mysqli_query($con, $sql);
                                $resultch = mysqli_num_rows($result);
                                if ($resultch < 1) {
                                ?>

                                    <p style="text-align: center;">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_Cpzev8.json" background="transparent" speed="0.7" style=" height:50vh;" loop autoplay></lottie-player>
                                    </p>
                                    <?php
                                } else {
                                    $subtotal = 0;
                                    $show = true;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $speciality = $row['speciality'];
                                        $salary = $row['salary'];


                                    ?>
                                        <tr>

                                            <td>
                                                <?php
                                                echo $name;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $email;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $speciality;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo "$" . $salary . " /m";
                                                ?>
                                            </td>
                                            <td>
                                                <a href="#update_chef<?php echo $row['id']; ?>" class=" left modal-trigger " style=" border-radius: 10px; text-align: left;  height: 100%; background-color:transparent;   box-shadow: none; ">
                                                    <i style=" color: gray;" class=" material-icons  ">edit</i>
                                                </a>

                                                <a href="admin/crud_chef.php?del_id=<?php echo $row['id']; ?>" style="  text-align: center; margin-left: 1.6em; height: 100%; background-color:transparent;   box-shadow: none; ">
                                                    <i style=" color: gray;" class=" material-icons  ">delete</i>
                                                </a>
                                            </td>

                                        </tr>
                                        <!-- ============================================================================================================================== -->
                                        <!--add Note Modal Structure -->
                                        <div id="update_chef<?php echo $row['id'] ?>" class="modal md" style="border-radius: 10px;">
                                            <div class="modal-content">
                                                <form action="admin/crud_chef.php" method="post">
                                                    <input type="hidden" name="chef_id" value="<?php echo $row['id']; ?>">
                                                    <div class="row">
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="name" placeholder=" <?php echo $name; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="email" placeholder="<?php echo $email; ?>" type="email" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="pass" placeholder="<?php echo $row['pass']; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="speciality" placeholder="<?php echo $speciality; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="restaurant_name" placeholder="<?php echo $row['restaurant_name']; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="salary" placeholder="<?php echo $salary; ?>" type="number" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>

                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;margin-top: 1em;">
                                                                <button name="update_chef_submit" type="submit" class="waves-effect waves-light btn  " style=" 
                             background-color: #1c1c1c;
            box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57); text-align: left;">
                                                                    Update
                                                                </button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                        <!-- ============================================================================================================================== -->
                                <?php
                                    }
                                }
                                ?>

                                </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!-- ============================================================================================================= -->
            <!-- employees -->


            <div class="col s12 m12 l12" style="margin-top: 5em;" id="employees">
                <div class="card z-depth-3 cards " style="border-radius: 8px;">
                    <div class="card-content " style="padding: 18px;">
                        <div class="card" style=" padding: 17px;
                         margin-top: -4em;border-radius: 5px;
                         background: linear-gradient(60deg, #66bb6a, #43a047);   
                          box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); ">
                            <div class="card-image white-text cneter-align">
                                <p class="valign-wrapper" style="text-align: left;   font-size: 2em; ">
                                    Other Employees
                                </p>
                                <p class="valign-wrapper" style="text-align: left;  font-size: 1.8vh; ">
                                    All The Records related to Employees can be edited and Deleted Here
                                </p>
                            </div>
                        </div>

                        <table class="responsive-table striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>department</th>
                                    <th>Salary</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody">
                                <?php
                                $show = false;
                                $sql = "SELECT * FROM employee order by id desc ";
                                $result = mysqli_query($con, $sql);
                                $resultch = mysqli_num_rows($result);
                                if ($resultch < 1) {
                                ?>

                                    <p style="text-align: center;">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_Cpzev8.json" background="transparent" speed="0.7" style=" height:50vh;" loop autoplay></lottie-player>
                                    </p>
                                    <?php
                                } else {
                                    $subtotal = 0;
                                    $show = true;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $name = $row['e_name'];
                                        $email = $row['email'];
                                        $department = $row['department'];
                                        $salary = $row['salary'];


                                    ?>
                                        <tr>

                                            <td>
                                                <?php
                                                echo $name;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $email;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo $department;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo "$" . $salary . " /m";
                                                ?>
                                            </td>
                                            <td>
                                                <a href="#update_employee<?php echo $row['id']; ?>" class=" left modal-trigger " style=" border-radius: 10px; text-align: left;  height: 100%; background-color:transparent;   box-shadow: none; ">
                                                    <i style=" color: gray;" class=" material-icons  ">edit</i>
                                                </a>

                                                <a href="admin/crud_employee.php?del_id=<?php echo $row['id']; ?>" style="  text-align: center; margin-left: 1.6em; height: 100%; background-color:transparent;   box-shadow: none; ">
                                                    <i style=" color: gray;" class=" material-icons  ">delete</i>
                                                </a>
                                            </td>

                                        </tr>
                                        <!-- ============================================================================================================================== -->
                                        <!--add Note Modal Structure -->
                                        <div id="update_employee<?php echo $row['id'] ?>" class="modal md" style="border-radius: 10px;">
                                            <div class="modal-content">
                                                <form action="admin/crud_employee.php" method="post">
                                                    <input type="hidden" name="employee_id" value="<?php echo $row['id']; ?>">
                                                    <div class="row">
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="e_name" placeholder=" <?php echo $name; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="email" placeholder="<?php echo $email; ?>" type="email" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="pass" placeholder="<?php echo $row['pass']; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <div class="col s1 m1 l1 "></div>
                                                            <div class="col s10 m10 l10">
                                                                <select name="department" class="browser-default">
                                                                    <option value="" disabled selected>Select Department</option>
                                                                    <option value="Accounting and Finance">Accounting and Finance.</option>
                                                                    <option value="HR">HR</option>
                                                                    <option value="Marketing">Marketing</option>
                                                                    <option value="Marketing">Waiters</option>
                                                                    <option value="Purchasing">Purchasing</option>
                                                                </select>
                                                            </div>
                                                            <div class="col s1 m1 l1 "></div>

                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="restaurant_name" placeholder="<?php echo $row['restaurant_name']; ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;">
                                                                <input name="salary" placeholder="<?php echo $salary; ?>" type="number" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                                            </p>
                                                        </div>

                                                        <div class="input-field col s12 m12 l12">
                                                            <p style="text-align: center;margin-top: 1em;">
                                                                <button name="update_employee_submit" type="submit" class="waves-effect waves-light btn  " style=" 
                             background-color: #1c1c1c;
            box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
            -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57); text-align: left;">
                                                                    Update
                                                                </button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                        <!-- ============================================================================================================================== -->
                                <?php
                                    }
                                }
                                ?>

                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



    <?php
    include_once 'partial/scripts.php';
    ?>
</body>

</html>


<script>
    $(document).ready(function() {
        $('.parallax').parallax();
        $('.tooltipped').tooltip();
    });

    $(document).ready(function() {
        $('select').formSelect();
    });
</script>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .card-panel {
        box-shadow: none;
        border-radius: 10px;
    }

    #number {
        text-align: center;
        border: none;
        width: 70%;
        font-size: 3.5vh;
        color: #727475;
        font-weight: 500;
        margin-top: 3.8vh;

    }

    .para_modal1 {
        text-align: center;
        margin-top: 2.5vw;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }


    .para_modal2 {
        text-align: center;
        margin-top: 5vh;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }

    .text {
        color: #a3a3a3;
        font-size: 2.5vh;
        text-align: left;
        font-weight: 600;

    }

    .quant {
        color: #727475;
        font-size: 2.5vh;
        text-align: left;
        font-weight: 600;
        margin-top: 0px;
    }

    .main_sec {
        margin: 30px;
        margin-top: 9vh;
    }


    .header_sec {
        margin: 23px;

    }



    #price {
        text-align: center;
        font-size: 2.5vh;
        color: #727475;
        font-weight: 600;

    }

    #price1 {
        text-align: center;
        font-size: 2.5vh;
        color: #727475;
        font-weight: 600;

    }

    #total {
        text-align: center;
        font-size: 2.5vh;
        color: #ea4e60;
        font-weight: 600;

    }

    @media only screen and (max-width: 600px) {
        .sub_total {
            margin-right: -8px;
            text-align: left;
            font-weight: 700;
            font-size: 3vh;
            color: #585858;
        }

        .card-panel {
            border-radius: 10px;
        }

        .para_modal1 {
            text-align: center;
            margin-top: 3.6vh;
            color: #727475;
            font-size: 3vh;
            font-weight: 300;
        }

        .para_modal2 {
            text-align: center;
            margin-top: 1vh;
            color: #727475;
            font-size: 2.3vh;
            font-weight: 300;
        }

        .header_sec {
            margin: 0px;
            margin-bottom: 50px;
        }

        #price {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: #727475;
            font-weight: 500;
        }

        #price1 {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: #727475;
            font-weight: 500;
        }

        #total {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: red;
            font-weight: 500;
        }


        .text {
            color: #727475;
            font-size: 2vh;
            text-align: center;
        }

        .main_sec {
            margin: 6px;
            margin-top: 0px;
        }
    }
</style>