<table class='centered'>
    <thead>
        <tr>
            <th>Day</th>
            <th>Date</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody>
        <?php
       
        $ts = strtotime('monday this week');
        // calculate the number of days since Monday
        $dow = date('w', $ts);
        $offset = $dow - 1;
        if ($offset < 0) {
            $offset = 6;
        }
                // calculate timestamp for the Monday
        $ts = $ts - $offset*86400;

        $days = array('MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN');
        for ($i = 0, $j = 0; $i < 7; $i++, $j++,$ts += 86400) {
            
        ?>
            <tr>
                <td><?php echo $days[$j]; ?></td>
                <td><?php echo date("m/d/Y ", $ts); ?></td>
                <td>$30</td>
            </tr>
        <?php
       
        }
        ?>
    </tbody>
</table>