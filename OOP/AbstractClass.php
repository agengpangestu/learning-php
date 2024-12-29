<?php

require_once "data/Location.php";

use Data\{City, Province, Country, Location};

// $location = new Location(); // ERROR

// hanya bisa mengakses turunan dari abstract class saja
$city = new City();
$province = new Province();
$country = new Country();