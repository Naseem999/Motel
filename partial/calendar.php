<?php
define("ADAY", (60 * 60 * 24));
$nowArray = getdate();
$month = $nowArray['mon'];
$year = $nowArray['year'];
$start = mktime(12, 0, 0, $month, 1, $year);
$firstDayArray = getdate($start);
$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
for ($i = 0; $i < sizeof($months); $i++) {
    if ($i == $month - 1) {
        $cal_header_mon = $months[$i];

    }
}
?>
<div class="row" style="padding: 10px;">
    <div class="col s12 m12 l12 center-align" style="background-color: #151414;">

        <p style="color: white; font-size: 3.5vh; font-weight: 600;"><?php echo $cal_header_mon . " " . $year; ?></p>
    </div>
    <div class="col s12 m12 l12 center-align" style="background-color: #1c1c1c;">
        <?php

        $days = array("S", "M", "T", "W", "T", "F", "S");
        echo "<table class='centered' style='background-color:#1c1c1c;' ><tr style=' border:none; color:white'>\n";
        foreach ($days as $day) {
            echo "<th style='text-align:center' >" . $day . "</th>\n";
        }
        for ($count = 0; $count < (6 * 7); $count++) {
            $dayArray = getdate($start);
            if ($count % 7 == 0) {
                if ($dayArray['mon'] != $month) {
                    break;
                } else {
                    echo "</tr><tr style='border:none'>\n";
                }
            }
            if ($count < $firstDayArray['wday'] || $dayArray['mon'] != $month) {
                echo "<td>&nbsp;</td>\n";
            } else {
                echo "<td style='color:white'>" . $dayArray['mday'] . "
                 </td>\n";
                unset($event_title);
                $start += ADAY;
            }
        }
        echo "</tr></table>";

        ?>
        <div class="row">
        <a href="news_single_post_FW.php" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">
        <
            <?php
            $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            for ($i = 0; $i < sizeof($months); $i++) {
                if ($i == $month) {
                    $mon=date('m', strtotime('last month'));
                   echo $months[$mon-1];
            
                }
            }
            ?>
        </a>
        </div>
    </div>

</div>