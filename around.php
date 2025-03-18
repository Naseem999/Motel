<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Around Us-Motel</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <div class="row">
        <div class="parallax-container" style="width:100%; height: 90vh">

            <div class="parallax">
                <img class="mySlides" style="filter:brightness(50%); " src="img/around_parllax_bg.jpg" alt="Parallax">
            </div>

            <div class="row " style=" width: 100%;  margin-top: 10vh; ">
                <div class="col s12 m12 l12 center-align">
                    <h3 style="text-align: center; font-weight: 600; font-size: 10vh; color: whitesmoke;">AROUND US
                    </h3>
                    <p style="color: white; font-size: 2.2vh; font-weight: 400;">FIND WHAT YOU NEED NEXT TO OUR
                        HOTEL</p>
                    <nav class="z-depth-5" style="width: 60vw; background-color:rgba(0,0,0 ,0.1) ; border: 1px solid transparent;  backdrop-filter: blur(40px);
                        border-radius: 30px; margin-left: 18vw;margin-right: 8vw; margin-top: 10vh;">
                        <div class="nav-wrapper">
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required style="text-align: center; color: white; background-color: transparent; border-radius: 30px;">
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>

            </div>
        </div>

    </div>

    <div class="row" style="height: 100%;  
     margin-top: -80px; width: 95%;  padding: 0px;" >
        <div class="col s12 m4 l4">
            <div class="card  hoverable" style="border-radius:5px; border: 1px solid transparent;" >
                <div class="card-image waves-effect waves-block waves-light" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <img class="activator responsive-img" src="img/h7_blog_card_1.jpg" style="height: 85vh;">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" style="font-weight: 500;"> RELAX AREA <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <p style="text-align: center;">AROUND US</p>
                    <hr style="width: 50px;">
                    <br>
                    <span class="card-title  text-darken-4" style="font-weight: 900; color:#838485"> RELAX AREA <i class="material-icons right">close</i></span>
                    <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                    <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="news_single_post_FW.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                </div>

            </div>

        </div>

        <div class="col s12 m4 l4">
            <div class="card  hoverable" style="border-radius:5px; border: 1px solid transparent;">
                <div class="card-image waves-effect waves-block waves-light"style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <img class="activator responsive-img" src="img/h7_blog_card_2.jpg" style="height: 85vh;">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" style="font-weight: 500;"> BAR <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <p style="text-align: center;">AROUND US</p>
                    <hr style="width: 50px;">
                    <br>
                    <span class="card-title  text-darken-4" style="font-weight: 900; color:#838485"> BAR <i class="material-icons right">close</i></span>
                    <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                    <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="bar.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                </div>

            </div>

        </div>

        <div class="col s12 m4 l4">
            <div class="card  hoverable" style="border-radius:5px;  border: 1px solid transparent;">
                <div class="card-image waves-effect waves-block waves-light" style="border-top-left-radius: 5px; border-top-right-radius: 5px;">
                    <img class="activator responsive-img" src="img/aroun_big_card.jpg" style="height: 85vh;">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" style="font-weight: 500;">RESTURENT <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <p style="text-align: center;">AROUND US</p>
                    <hr style="width: 50px;">
                    <br>
                    <span class="card-title  text-darken-4" style="font-weight: 900; color:#838485"> RESTURENT <i class="material-icons right">close</i></span>
                    <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                    <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="restaurant.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
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

<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });
</script>