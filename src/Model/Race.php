<?php

namespace Maxrodrigues\BackgroundGenerator\Model;

class Race implements RaceInterface
{

    public function homeland(): array
    {
        return [];
    }

    public function parents(): array
    {
        return [
            1 => 'Os dois pais estão vivos',
            2 => 'Apenas o pai está vivo',
            3 => 'Apenas a mãe está viva',
            4 => 'Seus pais foram mortos',
        ];
    }

    public function siblings(): array
    {
        return [];
    }

    public function unusualHomeland(): array
    {
        return [
            1 => 'Subterranêo',
            2 => 'Montanhas',
            3 => 'Planicie',
            4 => 'Cidadela ou Vila',
            5 => 'Cidade ou Metrópole',
            6 => 'Floresta',
            7 => 'Rio, Pantano',
            8 => 'Deserto',
            9 => 'Mar',
            10 => 'Tundra',
            11 => 'Outro plano',
        ];
    }
}