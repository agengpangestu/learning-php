<?php

$nilai = 100;

switch ($nilai):
    case 100:
        echo "heyyaaahh";
        break;
    case 90:
        echo "Yeah";
        break;
    case 80:
    case 70:
        echo "wait, waht ?";
        break;
    default:
        echo "don't cry buddy";
        break;
endswitch;