<?php
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\ImagickEscposImage;
use Mike42\Escpos\Printer;


$texto = $_POST['texto'];
$ip = $_POST['ip'];
$porta = $_POST['porta'];


$connector = new NetworkPrintConnector($ip, $porta);
$printer = new Printer($connector);

//PULAR LINHA
$printer -> text(" \n");

//TEXTO
$printer -> text("$texto\n");

//ESPACO
$printer -> feed();

//CORTA
$printer -> cut();

//FINALIZA
$printer -> close();

header('Location: index.php');
?>
