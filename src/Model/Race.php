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
}