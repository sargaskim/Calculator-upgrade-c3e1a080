<?php

$computter1 = 'Welke operatie wil je uitvoeren? (+, -, %)'.PHP_EOL;
$computter2 = 'Eerste getal?'.PHP_EOL;
$computter3 = 'Tweede getal?'.PHP_EOL;

echo $computter1;
$plusmin = readline("");


if ($plusmin == "+"){
    echo $computter2;
    $getal1 = readline("");
    if (!is_numeric($getal1)){
        echo $getal1, ' is geen getal';
        exit();
    }
    else if (is_numeric($getal1)){
        echo $computter3;
        $getal2 = readline("");

        if (!is_numeric($getal2)){
            echo $getal2, ' is geen getal';
            exit();
        }
        else if (is_numeric($getal2)){
            echo $getal1 + $getal2;
        }
    }
}

else if ($plusmin == "-"){
    echo $computter2;
    $getal1 = readline("");
    if (!is_numeric($getal1)){
        echo $getal1, ' is geen getal';
        exit();
    }
    else if (is_numeric($getal1)){
        echo $computter3;
        $getal2 = readline("");

        if (!is_numeric($getal2)){
            echo $getal2, ' is geen getal';
            exit();
        }
        else if (is_numeric($getal2)){
            echo $getal1 - $getal2;
        }
    }
}

else if ($plusmin == "%"){
    echo $computter2;
    $getal1 = readline("");
    if (!is_numeric($getal1)){
        echo $getal1, ' is geen getal';
        exit();
    }
    else if (is_numeric($getal1)){
        echo $computter3;
        $getal2 = readline("");

        if (!is_numeric($getal2)){
            echo $getal2, ' is geen getal';
            exit();
        }
        else if (is_numeric($getal2)){
            echo $getal1 % $getal2;
        }
    }
}

else {
    echo $plusmin, '  is geen geldige operatie';
    exit();
}