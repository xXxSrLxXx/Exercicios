<?php
//Make a program that reads a seller's name, his/her fixed salary and the sale's total made by himself/herself in the month (in money). Considering that this seller receives 15% over all products sold, write the final salary (total) of this seller at the end of the month , with two decimal places.

	$funcionario = "João";
	$salario = 500;
	$vendas = 1230.30;
	$resultado = ($vendas*15)/100;
	$salarioTotal = $salario + $resultado;
	

	echo $funcionario." que recebe ". "R$ ".number_format($salario,2,',','.')." e vendeu ". "R$ ".number_format($vendas,2,',','.')." receberá de comissão: "."R$ ".number_format($resultado,2,',','.')." E seu salario total será de:<br>";
	echo "R$ ".number_format($salarioTotal,2,',','.');
?>