<?php
    // Display via Terminal
    $count = 5;
    for($i = 1; $i <= $count; $i++) {
        $o = str_repeat('O', $i);
        echo str_pad($o, $count, ' ', STR_PAD_LEFT);
        echo PHP_EOL;
    }
    $count = 5;
    $max_count = ((2 * ($count - 1)) + 1);
    for($i = 0; $i < $count; $i++) {
        $o_count = ((2 * $i) + 1);
        $o = str_repeat('O', $o_count);
        echo str_pad($o, $max_count, ' ', STR_PAD_BOTH);
        echo PHP_EOL;
    }
?>