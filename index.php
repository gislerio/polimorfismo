<?php

require __DIR__."/vendor/autoload.php";

use App\Fazenda;
use App\Cachorro;
use App\Galinha;
use App\Vaca;


//echo 'estou aqui';
$vaca = new Vaca;
$galinha = new Galinha;
$cachorro = new Cachorro();

$fazenda = new Fazenda();

$fazenda->emitirSom($cachorro);
