<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 16.11.2016
 * Time: 1:56
 */
include "9.php";
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
}