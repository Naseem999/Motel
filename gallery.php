<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Gallery-Motel</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <!--   MAIN HEADER SECTION STARTS HERE -----------------------------------------------------------------------------  -->
    <div class=" row center-align" style=" margin-top: 
     0px; height:50vh; background: url(img/gallery_header_bg.jpg) no-repeat 50% 50%;
     background-size: cover;">

        <div class="conatiner  " style="height:50vh;background-color:rgba(0,0,0 ,0.5) ;  padding:10px;">
            <h5 class=" wobble-hor-bottom" style="color: #f9f9f9; font-size: 10vh; margin-top: 13vh; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                GALLERY

        </div>

    </div>

    <!-- show case section ============================================================================= -->

    <div class="row">
        <div class="col s12 m3 l3">
            <div class="card">
                <div class="card-image">
                    <img data-caption="Lorem Ipsum" class="materialboxed" src="img/gallery_card_bg1.jpg" style="height: 40vh;">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img data-caption="Lorem Ipsum" class="materialboxed" src="img/h7_parllax_small_bg2.jpg" style="height: 40vh;">
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img data-caption="Lorem Ipsum" class="card_B materialboxed " src="img/about2_header_bg.jpg">
                </div>
            </div>

        </div>
        <div class="col s12 m3 l3">
            <div class="card">
                <div class="card-image">
                    <img data-caption="Lorem Ipsum" class="materialboxed" src="img/h5_small_card_3.jpg" style="height: 40vh;">
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img data-caption="Lorem Ipsum" class="materialboxed" src="img/h5_header_3.jpg" style="height: 40vh;">
                </div>
            </div>
        </div>
    </div>




    <div class="row center-align " style="z-index: 0; margin-top: 12vh; ">


        <div class="carousel z-depth-5" style="background: rgb(250,222,231);
background: linear-gradient(168deg, rgba(250,222,231,1) 10%, rgba(181,255,252,1) 100%);

">
            <div class="hide-on-med-and-down col s12 m12 l12 " style="height:12vh;"></div>
            <h1  style="color: darkgray; font-size: 2vh;">GALLERY</h1>
            <hr style="width: 40px;">
            <p class="gallery_h1">Our Rooms</p>
            <div class="carousel-item">
                <img src="img/h5_header_3.jpg" alt="family room" title="family room">
                <h3>
                    FAMILY ROOM
                </h3>
            </div>

            <div class="carousel-item">
                <img src="img/h5_big_card.jpg" alt="DOUBLE ROOM" title="DOUBLE ROOM">
                <h3>
                    DOUBLE ROOM
                </h3>
            </div>

            <div class="carousel-item">
                <img src="img/h5_header_1.jpg" alt="LUXARY ROOM" title="LUXARY ROOM">
                <h3>
                    LUXARY ROOM
                </h3>
            </div>

            <div class="carousel-item">
                <img src="img/h7_s_card_5.jpg" alt="APARTMENT" title="APARTMENT">
                <h3>
                    APARTMENT
                </h3>
            </div>

            <div class="carousel-item">
                <img src="img/h5_big_card.jpg" alt="SMALL ROOM" title="SMALL ROOM">
                <h3>
                    SMALL ROOM
                </h3>
            </div>

            <div class="carousel-item">
                <img src="img/h7_s_card_2.jpg " alt="ROOM WITH VIEW" title="ROOM WITH VIEW">
                <h3>
                    ROOM WITH VIEW
                </h3>
            </div>


        </div>
        <div class="carousel-fixed-item center" style="border:1px solid red; margin-top: -200px;">
            <a  href="room_gallery.php" class="btn waves-effect   darken-text-2" style="color:gray; background-color: #f9f9f9;">View Details</a>
        </div>

    </div>

    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>
</body>

</html>
<style>
    ::-webkit-scrollbar {
        width: 0px;
    }
    .gallery_h1{
        font-size: 10vh; color:gray; margin-top: 0px;
    }
    .carousel {
        height: 850px;
        perspective: 600px;
        transform: translateY(-100px);
        margin-bottom: 20px;
        border-radius: 0px;
    }

    .carousel .carousel-item {
       
        cursor: grab;
        width: 40em;
    }

    .carousel .carousel-item:active {
        cursor: grabbing;
    }

    .carousel .carousel-item img {
        border: 1px solid transparent;
        border-radius: 10px;
        width: 100%;
    }

    .carousel .carousel-item h3 {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background-color: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        color: white;
        font-size: 2vh;
        font-weight: lighter;
        margin: -6vh 0 0;
        padding: 10px 5px;
        text-align: center;
    }

    .card_B {
        height: 82vh;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 600px) {
        .card_B {
            height: 40vh;
        }
        .carousel .carousel-item{
            width: 30em;
        }
        
        .carousel{
            height: 600px;
        }
        .gallery_h1{
            font-size:5vh;
            
        }

    }

    #materialbox-overlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(20px);
        z-index: 1000;
        will-change: opacity;
    }
</style>
<script>
    $(document).ready(function() {
        $('.carousel').carousel();
    });
    $(document).ready(function() {
        $('.materialboxed').materialbox();
    });
</script>