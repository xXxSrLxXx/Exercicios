<?php
////Calculate a car's average consumption being provided the total distance traveled (in Km) and the spent fuel total (in liters).

function consumo($percurso,$gasto){
	$media = $percurso/$gasto;
	return round($media, 3);
}

echo consumo(500,35.0)."  km/l<br>";
echo consumo(2254,124.4)."  km/l<br>";
echo consumo(4554,464.6)."  km/l<br>";
