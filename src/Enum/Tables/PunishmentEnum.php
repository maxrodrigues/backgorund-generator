<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum PunishmentEnum: string
{
    /** Beating */
    case BEATING = 'Espancamento';

    /** Branding */
    case BRANDING = 'Marcado a ferro';

    /** Exile */
    case EXILE = 'Exilado';

    /** Fine */
    case FINE = 'Multa';

    /** Imprisonment */
    case IMPRISONMENT = 'Prisão';

    /** Stocks */
    case STOCKS = 'Estoque';

    /** Torture */
    case TORTURE = 'Tortura';

    /** Trial by combat */
    case TRIAL_BY_COMBAT = 'Julgamento por combate';

    /** Trial by fire */
    case TRIAL_BY_FIRE = 'Julgamento por fogo';

    /** Trial by water */
    case TRIAL_BY_WATER = 'Julgamento por água';
}
