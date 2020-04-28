<?php

$con = new mysqli("10.109.13.125","root","krittawat","foods");



if ($con) {
    echo "connected.";
} else {
    echo "ERROR!.";
}



?>