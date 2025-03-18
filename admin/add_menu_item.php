<?php
include_once './partial/head.php';

?>
<div class="row">
    <div class="col s12 m11 l11" style="margin-bottom: 20px;">
        <p style="color: #5a5a5a; font-weight: bold; margin-top: 0px; margin-bottom: 2px; font-size: 5vh; text-align: center;">Add Item To Menu</p>
        <hr style="width: 40px;">
    </div>
    <div class="col s12 m12 l12">
        <div class="card" style="background: linear-gradient(145deg, #ffffff, #d9dddd);
box-shadow:  5px 5px 5px #c6c9ca,
             -5px -5px 5px #ffffff;  border-radius: 20px;">
            <div class="card-content">
                <form action="admin/add_item.php" method="POST" enctype="multipart/form-data">
                    <ul class="stepper leinier" style="background: linear-gradient(145deg, #ffffff, #d9dddd);">
                        <!-- basic details sec -->
                        <li class="step active">
                            <div class="step-title waves-effect " style="border-radius: 20px; ">
                                <span style="color: #5a5a5a;">Basic Details</span>
                            </div>
                            <div class="step-content">
                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <input name="item_name" placeholder="Item Name" required type="text" class="validate " style="text-align: center; font-size: 3vh;">
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <input name="item_price" required placeholder="Price ($5)" type="number" class="validate " style="text-align: center; font-size: 3vh;">
                                    </div>
                                </div>

                                <div class="step-actions">
                                    <button style="background-color: #1c1c1c;" class=" waves-effect waves-dark btn next-step">CONTINUE</button>
                                </div>
                            </div>
                        </li>
                        <!--  Upload img  sec -->
                        <li class="step ">
                            <div class="step-title waves-effect" style="border-radius: 20px; ">
                                <span style="color: #5a5a5a;">Upload Item Image</span>
                            </div>
                            <div class="step-content">
                                <div class="row">
                                    <div class="input-field col s12 m10 l10">
                                        <p style="text-align: center;">
                                            <i style="color: #5a5a5a;" class="large material-icons">cloud_upload</i>

                                        </p>
                                        <div class="col s12 m10 l10">
                                            <div class="file-field input-field">
                                                <div class="btn waves-effect waves-light" style="background-color: #1c1c1c;">
                                                    <span>Upload</span>
                                                    <input type="file" name="image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="step-actions">
                                    <!-- Here goes your actions buttons -->
                                    <button style="background-color: #1c1c1c;" class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                    <button style="background-color: #5a5a5a    ;" class="waves-effect waves-dark btn previous-step">BACK</button>
                                </div>
                            </div>
                        </li>
                        <!-- Other details sec -->
                        <li class="step ">
                            <div class="step-title waves-effect " style="border-radius: 20px; ">
                                <span style="color: #5a5a5a;">Other Details</span>
                            </div>
                            <div class="step-content">
                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <p>
                                            <label>
                                                <input style="color: #1c1c1c;" required id="food" value="food" onchange="show_type1();" class="with-gap " name="item_category" type="radio" />
                                                <span>Food</span>
                                            </label>
                                            <label style="margin-left: 10px;">
                                                <input required id="drink" value="drink" onchange="show_type2();" class="with-gap" name="item_category" type="radio" />
                                                <span>Drink</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                       
                                            <input name="item_type" required placeholder="Category" type="text" class="validate " style="text-align: center; font-size: 3vh;">
                                    </div>
                                </div>

                                <div class="step-actions">
                                    <button name="add_item_submit" type="submit" style="background-color: #1c1c1c;" class="waves-effect waves-light btn ">Add to menu</button>
                                    <button style="background-color: #5a5a5a;" class="waves-effect waves-dark btn previous-step">BACK</button>
                                </div>
                            </div>
                        </li>


                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Customize menu -->

<div class="row">
    <div class="col s12 m11 l11" style="margin-bottom: 20px;">
        <p style="color: #5a5a5a; font-weight: bold; margin-top: 0px; margin-bottom: 2px; font-size: 5vh; text-align: center;">
            Customize Menu</p>
        <hr style="width: 40px;">
    </div>
    <div class="col s12 m12 l12">
        <div class="card" style="background: linear-gradient(145deg, #ffffff, #d9dddd);
box-shadow:  5px 5px 5px #c6c9ca,
             -5px -5px 5px #ffffff;  border-radius: 20px;">
            <div class="card-content">
                <form action="admin/add_item.php" method="POST" enctype="multipart/form-data">
                    <ul class="stepper " style="background: linear-gradient(145deg, #ffffff, #d9dddd);">
                        <!-- basic details sec -->
                        <li class="step ">
                            <div class="step-title waves-effect " style="border-radius: 20px; ">
                                <span style="color: #5a5a5a;">Tables</span>
                            </div>
                            <div class="step-content">
                                <div class="row">

                                    <div class="input-field col s12 m6 l6">
                                        <input name="no_of_tables" placeholder="Enter Number Of Tables" type="number" class="validate " style="text-align: center; font-size: 3vh;">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--  Upload img  sec -->
                        <li class="step ">
                            <div class="step-title waves-effect" style="border-radius: 20px; ">
                                <span style="color: #5a5a5a;">Upload Offers Images</span>
                            </div>
                            <div class="step-content">
                                <div class="row">
                                    <div class="input-field col s12 m10 l10">
                                        <p style="text-align: center;">
                                            <i style="color: #5a5a5a;" class="large material-icons">cloud_upload</i>

                                        </p>
                                        <div class="col s12 m10 l10">
                                            <div class="file-field input-field">
                                                <div class="btn waves-effect waves-light" style="background-color: #1c1c1c;">
                                                    <span>Upload 1</span>
                                                    <input type="file" name="menu_banner_1">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="input-field col s12 m10 l10">

                                        <div class="col s12 m10 l10">
                                            <div class="file-field input-field">
                                                <div class="btn waves-effect waves-light" style="background-color: #1c1c1c;">
                                                    <span>Upload 2</span>
                                                    <input type="file" name="menu_banner_2">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="input-field col s12 m10 l10">

                                        <div class="col s12 m10 l10">
                                            <div class="file-field input-field">
                                                <div class="btn waves-effect waves-light" style="background-color: #1c1c1c;">
                                                    <span>Upload 3</span>
                                                    <input type="file" name="menu_banner_3">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="step-actions">
                                    <button name="add_menu_submit" type="submit" style="background-color: #1c1c1c;" class="waves-effect waves-light btn ">Add to menu</button>
                                    <button style="background-color: #5a5a5a;" class="waves-effect waves-dark btn previous-step">BACK</button>
                                </div>
                            </div>
                        </li>



                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once './partial/scripts.php';
?>
<style>
    [type="radio"]:checked+span:after,
    [type="radio"].with-gap:checked+span:after {
        background-color: #1c1c1c;
    }

    [type="radio"]:checked+span:after,
    [type="radio"].with-gap:checked+span:before,
    [type="radio"].with-gap:checked+span:after {
        border: 2px solid #1c1c1c;
    }
</style>
<script>
    var stepper = document.querySelector('.stepper');
    var stepperInstace = new MStepper(stepper)

    function show_type1() {
        let food_type = document.getElementById('food_type');
        let drink_type = document.getElementById('drink_type');

        food_type.style.display = "block";
        drink_type.style.display = "none";

    }

    function show_type2() {
        let food_type = document.getElementById('food_type');
        let drink_type = document.getElementById('drink_type');

        food_type.style.display = "none";
        drink_type.style.display = "block";
    }
</script>