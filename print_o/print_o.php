<?php
    // Display via Browser
    $count = 5;
    for($i = 1; $i <= $count; $i++) {
        $o = str_repeat('O', $i);
        echo str_replace('*', '&nbsp;&nbsp;&nbsp;', str_pad($o, $count, '*', STR_PAD_LEFT) );
        echo "<br />";
    }
    echo "<hr/>"; 
  
    $count = 5;
    $max_count = ((2 * ($count - 1)) + 1);
    for($i = 0; $i < $count; $i++) {
        $o_count = ((2 * $i) + 1);
        $o = str_repeat('O', $o_count);
        echo str_replace('*', '&nbsp;&nbsp;&nbsp;', str_pad($o, $max_count, '*', STR_PAD_BOTH) );
        echo "<br />";
    }
?>