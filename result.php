<?php
if (isset($_POST["radius"]) && isset($_POST["height"])) {
  $radius = $_POST["radius"];
  $height = $_POST["height"];
  $volume = pi() * $radius**2 * $height;
  $surfaceArea = 2 * pi() * $radius * ($radius + $height);
  echo "The volume of the cylinder with radius " . $radius . " cm and height " . $height . " cm is " . number_format($volume, 2) . " cm^3, while the surface area is " . number_format($surfaceArea, 2) . " cm^2.";
}
?>
