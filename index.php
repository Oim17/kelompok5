<?php

include_once "Volly.php";
include_once "Badminton.php";

echo "VOLLY<br>";
$vly = New Volly ();
echo $vly->melatih()."<br>";
echo $vly->membakarKalori()."<br>";

echo "<br> BADMINTON<br>";
$bdm = New Badminton ();
echo $bdm->melatih()."<br>";
echo $bdm->membakarKalori()."<br>";