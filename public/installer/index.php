<?php

function calculateCost() {
    $timeTarget = 0.2;

    $cost = 9;
    do {
        $cost++;
        $start = microtime(true);
        password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
        $end = microtime(true);
    } while (($end - $start) < $timeTarget);

    echo "Appropriate Cost Found: " . $cost . "\n";
}


echo "<pre>" .
print_r( parse_ini_file("../../UniverseCRM.ini") ,true) . "</pre>";