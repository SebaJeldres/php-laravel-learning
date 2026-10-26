<?php

$precio = 20000;
$descuento = 3000;
$cantidad = 2;

$precioFinal = $precio - $descuento;
$total = $precioFinal * $cantidad;

echo "Total: " . $total . " CLP\n";

var_dump($total > 30000);


$videojuego = "Hollow Knight";
$precioUnitario = 18000;
$cantidad = 3;
$DescuentoFijoTotal = 4000;
$costoDespacho = 1500;

$subtotal = $precioUnitario * $cantidad;
$precioConDescuento = $subtotal - $DescuentoFijoTotal;
$precioConDescuento += $costoDespacho;
$totalFinal = $precioConDescuento;

echo "Juego: ". $videojuego ."\n"."SubTotal: " . $subtotal . " CLP\n"."Total Final: " . $totalFinal . " CLP\n";

var_dump($totalFinal >= 50000);