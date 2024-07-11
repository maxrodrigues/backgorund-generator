<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum ParentsProfessionEnum: string
{
    /** Slaves */
    case SLAVES = 'Escravos';

    /** Serfs/Peasants */
    case SERFS_PEASANTS = 'Servos ou Camponeses';

    /** Entertainers */
    case ENTERTAINERS = 'Artistas';

    /** Soldiers */
    case SOLDIERS = 'Soldados';

    /** Sailors */
    case SAILORS = 'Marinheiros';

    /** Thieves */
    case THIEVES = 'Ladrões';

    /** Artisans */
    case ARTISANS = 'Artesãos';

    /** Merchants */
    case MERCHANTS = 'Comerciantes';

    /** Clergy or Cultists */
    case CULTISTS = 'Clégigos ou Cultistas';
}
