<?php
////Calculate a car's average consumption being provided the total distance traveled (in Km) and the spent fuel total (in liters).

function consumo($percurso,$gasto){
	return $media = $percurso/$gasto;
	echo $media;
}
echo consumo(500,35.0)."<br>";
echo consumo(2254,124.4)."<br>";
echo consumo(4554,464.6)."<br>";

?>