<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    $chef_id = $_SESSION['chef_id'];
    ?>
</head>

<body>

    <div class="row">
        <?php
        $sql1 = "SELECT * FROM todo WHERE note_for=$chef_id order by id desc";
        $result1 = mysqli_query($con, $sql1);
        $resultch1 = mysqli_num_rows($result1);
        if ($resultch1 < 1) {
        ?>
        <p style="text-align: center;"><lottie-player src="https://assets9.lottiefiles.com/packages/lf20_2pqqIT.json"  background="transparent"  speed="0.7"  style="width: 70vw; height:60vh;"  loop  autoplay></lottie-player>
<p style="color:gray; text-align: center; font-size: 5vh;"> Add Your Frist Note</p>
<hr style="width: 50px;">
            <?php
        } else {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $title = $row1['title'];
                $desc = $row1['description'];
            ?>
                <div class="col s12 m4 l4 ">
                    <div class="card z-depth-1 " style="border-radius: 10px;">
                        <div class="card-content black-text">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <p class="card-title" style="color: #3C4858; font-size: 3vh;"><?php echo $title; ?></p>
                                </div>
                                <div class="col s12 m12 l12 ">
                                    <textarea  disabled rows="6" cols="50" style=" height: auto; font-size: 2vh; border: none; margin-left: 5px; color: gray;"><?php echo $desc; ?></textarea>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col s6 m6 l6 ">
                                    <p style="font-size: 1.7vh; margin-left: 5px; color: lightgray;"><?php echo $row1['timestamp_']; ?></p>
                                </div>
                                <div class="col s6 m6 l6 ">
                                    <a href="chef/crud_note.php?del_id=<?php echo $row1['id']; ?>" class="right " style="  text-align: left; margin-left: 1.6em; height: 100%; background-color:transparent;   box-shadow: none; ">
                                        <i style=" color: gray;" class=" material-icons  ">delete</i>
                                    </a>
                                    <a href="#note<?php echo $row1['id']; ?>" class="right modal-trigger " style=" border-radius: 10px; text-align: left; margin-left: 20px; height: 100%; background-color:transparent;   box-shadow: none; ">
                                        <i style=" color: gray;" class=" material-icons  ">edit</i>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--add Note Modal Structure -->
                <div id="<?php echo "note" . $row1['id']; ?>" class="modal md" style="border-radius: 10px;">
                    <div class="modal-content">
                        <form action="chef/crud_note.php" method="post">
                            <input type="hidden" name="note_id" value="<?php echo $row1['id']; ?>">
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;">
                                        <input name="edit_title" placeholder="<?php echo $title ?>" type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                                    </p>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;">
                                        <textarea name="edit_desc" placeholder="<?php echo $desc ?> " type="text" class="validate materialize-textarea" style="width: 80%; text-align: left; font-size: 2.5vh;"></textarea>
                                    </p>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;margin-top: 1em;">
                                        <button name="update_note_submit" type="submit" class="waves-effect waves-light btn  " style=" 
                         background-color: #1c1c1c;
        box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57); text-align: left;">
                                            Update Note
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>


    <div id="cart_btn" style=" padding: 25px;
           position: fixed;
           bottom: 0;
           z-index: 1;
           right: 0;
          margin: 0px;
          margin-bottom: 0px;  
          ">
        <p style=" text-align:right; margin-top: 0px; z-index: 1;"> <a href="#add" style="background-color: #1c1c1c " class=" modal-trigger z-depth-5 btn-floating btn-large waves-effect waves-light  ">
                <i class=" material-icons">add</i>
            </a>
        </p>

    </div>


    <!--add Note Modal Structure -->
    <div id="add" class="modal md" style="border-radius: 10px;">
        <div class="modal-content">
            <form action="chef/crud_note.php" method="post">
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <p style="text-align: center;">
                            <input name="title" placeholder="Title" required type="text" class="validate " style="width: 80%; text-align: left; font-size: 2.5vh;">
                        </p>
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <p style="text-align: center;">
                            <textarea name="desc" required placeholder="Take a note..... " type="text" class="validate materialize-textarea" style="width: 80%; text-align: left; font-size: 2.5vh;"></textarea>
                        </p>
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <p style="text-align: center;margin-top: 1em;">
                            <button name="add_note_submit" type="submit" class="waves-effect waves-light btn  " style=" 
                         background-color: #1c1c1c;
        box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -webkit-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57);
        -moz-box-shadow: 2px 3px 12px 1px rgba(28, 28, 28, 0.57); text-align: left;">
                                Add Note
                            </button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <?php
    include_once 'partial/scripts.php';
    
    ?>
</body>

</html>
<script>

</script>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .md {
        width: 50vw;
        height: 100vh;
    }

    @media only screen and (max-width: 600px) {
        .md {
            width: 99vw;
            height: 100vh;
        }
    }
</style>