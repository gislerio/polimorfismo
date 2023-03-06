<?php

namespace App;

use App\Galinha;
use App\Vaca;
use App\Cachorro;
use InvalidArgumentException;

class Fazenda
{
    function emitirSom($animal)
    {
        // encapsulamento
        if (!($animal instanceof Cachorro || $animal instanceof Vaca || $animal instanceof Galinha))
            throw new InvalidArgumentException("Fazenda.class: tipo de 'animal' inválido!");

        // executando ação
        if ($animal instanceof Cachorro) $animal->latir();
        if ($animal instanceof Vaca) $animal->mugir();
        if ($animal instanceof Galinha) $animal->cacarejar();
    }
}