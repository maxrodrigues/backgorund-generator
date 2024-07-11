<?php

namespace Maxrodrigues\BackgroundGenerator;

use Maxrodrigues\BackgroundGenerator\Model\Race;
use function Laravel\Prompts\select;

class Dwarf extends Race
{
    public function __construct()
    {
        echo select('Quantos irmãos você tem?', $this->siblings());
    }

    public function homeland(): array
    {
        return [
            1 => 'Colina ou Montanha',
            2 => 'Subterrâneo',
            3 => 'Vila ou Cidadela não Anã',
            4 => 'Cidade ou Metrópole não Anã',
            5 => 'Incomum'
        ];
    }

    public function siblings(): array
    {
        return [
            1 => random_int(1, 4) . ' irmãos biológicos',
            2 => random_int(1, 5) . ' irmãos biológicos',
            3 => random_int(1, 3) . ' irmãos biológicos e ' . random_int(1, 3) . 'irmãos adotados',
            4 => 'Sem irmãos',
        ];
    }

}