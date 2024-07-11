<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum CrimeEnum: string
{
    /** Adultery */
    case ADULTERY = 'Adultério';

    /** Arson */
    case ARSON = 'Incêndio criminoso';

    /** Burglary */
    case BURGLARY = 'Arrombamento';

    /** Heresy */
    case HERESY = 'Heresia';

    /** Minor offense (sumptuary law) */
    case MINOR_OFFENSE = 'Ofensa menor (perjurio)';

    /** Murder */
    case MURDER = 'Assassinato';

    /** Rebellion/treason */
    case REBELLION = 'Rebelião/Traićão';

    /** Robbery */
    case ROBBERY = 'Roubo';

    /** Smuggling */
    case SMUGGLING = 'Contrabando';

    /** Unlawful use of magic */
    case UNLAWFUL_MAGIC = 'Uso ilegal de magia';
}
