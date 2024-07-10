<?php

namespace Maxrodrigues\BackgroundGenerator\Model;

interface RaceInterface
{
    public function homeland(): array;

    public function parents(): array;

    public function siblings(): array;
}