<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Contact-Motel</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <div class="row">
        <div class="parallax-container" style="width:100%; height: 60vh">
            <div class="parallax">
                <img class="mySlides" style="filter:brightness(20%); " src="img/contact_header_bg.jpg" alt="Parallax">
            </div>
            <div class="row " style=" width: 100%;  margin-top: 12vh; ">
                <div class="col s12 m12 l12 center-align">
                    <h3 style="text-align: center; font-weight: 600; font-size: 7.5vh; color: whitesmoke;">
                        CONTACT US
                    </h3>
                </div>

            </div>
        </div>

    </div>

    <div class="row serve_section">
        <div class="col s12 m6 l6">
            <span class="left" style="margin: 10px; vertical-align: middle; font-size: 10vh; font-family: 'Poppins', sans-serif; color: #a3a3a3;">L</span>
            <p style="color: #a3a3a3;line-height: 27px; font-size: 2.5vh; font-family: 'Poppins', sans-serif;">orem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada blandit dui vel tempor. Nunc leo libero, consectetur sit amet sem sed, luctus
                sollicitudin est. Sed eget pharetra quam, ut convallis est. Phasellus convallis egestas magna, id ullamcorper</p>
        </div>
        <div class="col s12 m6 l6">
            <p style="color: #a3a3a3;line-height: 27px; font-size: 2.5vh; font-family: 'Poppins', sans-serif;">Pellentesque
                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sodales, sapien ut venenatis
                scelerisque, nulla dui consectetur nisi, at auctor purus orci aliquam turpis.
                Nulla ac sagittis massa, a consequat ex. Morbi vestibulum mi fringilla sodales.</p>
        </div>
    </div>

    <div class="row serve_section" >
        <!-- --------------------------------------------- -->
        <div class="col s12 m6 l6" >
            <h1 style="color:#727475; font-size: 4.5vh;">Write Us</h1>
            <div class="card-content white-text">
                <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 700;">Name:</span>
                <br><br>
                <input id="first_name" type="text" style="border:1px solid #f1f1f1;width: 98%;  background-color: #f9f9f9;;
                    padding:1px;      ">
                <br><br>
                <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 700;">Email:</span>
                <br><br>
                <input id="first_name" type="email" class="validate" style="
                     background-color: #f9f9f9; border:1px solid #f1f1f1; width: 98%; ">
                <br><br>
                <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 700;">Message:</span>
                <br><br>
                <textarea id="first_name" type="email" class=" " style="border:1px solid #f1f1f1;width: 98%;  overflow-y: auto;    height:10vh; 
                     background-color: #f9f9f9;; "></textarea>
                <br><br>
                <a href="thanks.php" style=" background-color: #727475;  margin-top: 10px; " class=" waves-effect waves-light btn  ">SEND NOW</a>
            </div>
        </div>

        <!-- -------------------------------------------------------------- -->
        <div class="col s12 m6 l6" >
            <div class="col s12 m12 l12">
            <h1 style="color:#78797a; font-size: 4.5vh ; color:gray; ">Frequently Asked Questions</h1>
            <p style="color: #a3a3a3;line-height: 27px; font-size: 2.5vh; font-family: 'Poppins', sans-serif;">Pellentesque
                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sodales, sapien ut venenatis
                scelerisque, nulla dui consectetur nisi, at auctor purus orci aliquam turpis.
                Nulla ac sagittis massa, a consequat ex. Morbi vestibulum mi fringilla sodales.</p>
            </div>

                <ul class="collapsible expandable z-depth-0" style="border: none;">
                    <li>
                        <div class="collapsible-header" style="border: none;"><i style=" color: #1c1c1c; " onclick="fun();" class=" material-icons">add_box</i><span style="color: gray;font-weight: 600;">
                                How to pay an online room reservation ?</span></div>
                        <div class="collapsible-body "><span style="color: #a3a3a3;line-height: 27px; font-size: 2vh; font-family: 'Poppins', sans-serif;">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui.
                                Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi. Maecenas nec purus sed sapien maximus pellentesque.
                                Pellentesque maximus nec felis sed suscipit. Phasellus eu mollis lectus, eget rhoncus leo. Sed eget leo ullamcorper,
                                vulputate diam eget, malesuada metus.</span></div>
                    </li>

                    <li>
                        <div class="collapsible-header" style="border: none;"><i style="color: #1c1c1c; " class=" material-icons">add_box</i><span style="color: gray;font-weight: 600;">
                                How to became a VIP customer in our resort ?</span></div>
                        <div class="collapsible-body "><span style="color: #a3a3a3;line-height: 27px; font-size: 2vh; font-family: 'Poppins', sans-serif;">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui.
                                Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi. Maecenas nec purus sed sapien maximus pellentesque.
                                Pellentesque maximus nec felis sed suscipit. Phasellus eu mollis lectus, eget rhoncus leo. Sed eget leo ullamcorper,
                                vulputate diam eget, malesuada metus.</span></div>
                    </li>

                    <li>
                        <div class="collapsible-header" style="border: none;"><i style="color: #1c1c1c; " class=" material-icons">add_box</i><span style="color: gray;font-weight: 600;">
                                Which currency do we accept in our structure ?</span></div>
                        <div class="collapsible-body "><span style="color: #a3a3a3;line-height: 27px; font-size: 2vh; font-family: 'Poppins', sans-serif;">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui.
                                Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi. Maecenas nec purus sed sapien maximus pellentesque.
                                Pellentesque maximus nec felis sed suscipit. Phasellus eu mollis lectus, eget rhoncus leo. Sed eget leo ullamcorper,
                                vulputate diam eget, malesuada metus.</span></div>
                    </li>

                    <li>
                        <div class="collapsible-header" style="border: none;"><i style="color: #1c1c1c; " class=" material-icons">add_box</i><span style="color: gray;font-weight: 600;">
                                How can I give my clothes for speed laundry service ?</span></div>
                        <div class="collapsible-body "><span style="color: #a3a3a3;line-height: 27px; font-size: 2vh; font-family: 'Poppins', sans-serif; ">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui.
                                Maecenas sollicitudin risus non faucibus blandit. Nulla facilisi. Maecenas nec purus sed sapien maximus pellentesque.
                                Pellentesque maximus nec felis sed suscipit. Phasellus eu mollis lectus, eget rhoncus leo. Sed eget leo ullamcorper,
                                vulputate diam eget, malesuada metus.</span></div>
                    </li>

                </ul>

        </div>
    </div>

    <!-- section 3 row -------------------------------------------------------------------------------------->

    <div class="row center-align" style="  margin-bottom: 0px; margin-top: 
     0px; height:40vh; background: url(img/contact2_lastSEC_bg.jpg) no-repeat 50% 50%;
     background-size: cover;">

        <div class="conatiner  " style="height:40vh;background-color:rgba(0,0,0 ,0.5) ;  padding:10px;">
             <p style="margin-top: 10vh; color: #f9f9f9;">GET IN TOUCH</p>
             <hr style="width: 50px;">
            <h5  style="color: #f9f9f9; font-size: 5vh;  font-family: 'Poppins', sans-serif;">
            Feel free to contact us for any questions and doubts</h5>
           
        </div>
    </div>

    <!-- map section -->
    <div class="row" >
    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d897993.5873925498!2d77.070348!3d28.455823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef9030b6cd2655e2!2sTaj%20City%20Centre%20Gurugram!5e0!3m2!1sen!2sin!4v1608313819387!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    </div>
    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>
</body>

</html>
<style>
    .serve_section {
        margin: 50px;
        margin-top: 0px;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 600px) {
        .serve_section {
            margin: 5px;
            margin-top: 5px;
        }



    }
</style>
<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });
    $(document).ready(function() {
        $('.collapsible').collapsible();
    });
</script>