<?php

require('Bicycle.php');
require('Car.php');

$bike = new Bicycle('red');

$bike->setCurrentSpeed(50);

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');

$tornado = new Bicycle('black');
$tornado->forward();

$tornado->dump();

$ford = new Car('black', '4', 'gasoil');

echo $ford->start();
echo $ford->forward();
echo '<br> Vitesse de la voiture : ' . $ford->getCurrentSpeed() . 'km/h <br>';
echo $ford->brake();
echo '<br> Vitesse de la voiture : ' . $ford->getCurrentSpeed() . 'km/h <br>';
echo $ford->brake();

$mustang = new Car('grey', '2', 'diesel');

echo $mustang->start();
echo $mustang->forward();
echo '<br> Vitesse de la voiture : ' . $mustang->getCurrentSpeed() . 'km/h <br>';
echo $mustang->brake();
echo '<br> Vitesse de la voiture : ' . $mustang->getCurrentSpeed() . 'km/h <br>';
echo $mustang->brake();
