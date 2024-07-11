<?php
declare(strict_types=1);
namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum CircumstanceBirthEnum: string
{
    /** Lower-Class Birth */
    case LOWER_CLASS = 'Nascimento de classe baixa';

    /** Middle-Class Birth */
    case MIDDLE_CLASS = 'Nascimento de classe média';

    /** Noble Birth */
    case NOBLE_CLASS = 'Nascimento nobre';

    /** Adopted Outside Your Race */
    case ADOPTED_OUTSIDE_RACE = 'Adotado fora da sua raca';

    /** Adopted */
    case ADOPTED = 'Adotado';

    /** Bastard Born */
    case BASTARD_BORN = 'Nascimento de bastardo';

    /** Blessed Birth */
    case BLESSED = 'Nascimento abenćoado';

    /** Born of Violence */
    case VIOLENCE = 'Nascimento de violência';

    /** Born out of Time */
    case OUT_OF_TIME = 'Nascido fora do tempo';

    /** Born into Bondage */
    case INTO_BONDAGE = 'Nascido escravo';

    /** Cursed Birth */
    case CURSED = 'Nascimento amaldiçoado';

    /** Dishonored Family*/
    case DISHORONED_FAMILY = 'Família desonrada';

    /** Heir to a Legacy */
    case HEIR_LEGACY = 'Herdeiro de um legado';

    /** Left to Die */
    case LEFT_DIE = 'Deixado pra morrer';

    /** Marked by the Gods */
    case MARKED_GODS = 'Marcado pelos deuses';

    /** Energy Infused */
    case ENERGY_INFUSED = 'Infundido de energia';

    /** Progeny of Power */
    case PROGENY_POWER = 'Progênie de poder';

    /** Prophesied */
    case PROPHESIED = 'Profetizado';

    /** Reincarnated */
    case REINCARNATED = 'Reincarnado';

    /** The Omen */
    case OMEN = 'Presságio';

    public static function count(): int
    {
        return count(self::cases());
    }

    public static function getRandomCircumstanceBirth()
    {
        //
    }

    private function detailCircumstanceBirth(): array
    {
        return [
            1 => 'Você nasceu entre camponeses ou moradores de favelas. Você cresceu trabalhando na terra ao redor de uma vila ou mansão, praticando um comércio rudimentar ou mendigando em um assentamento.',
            2 => 'Você nasceu na classe média, que inclui comerciantes, artesãos e comerciantes. Você provavelmente cresceu em um assentamento de bom tamanho e um de seus pais provavelmente está associado a uma guilda ou outra organização comercial. Como pessoa livre, você não experimenta a escravidão da servidão ou do campesinato, mas também lhe falta o privilégio da nobreza.',
            3 => 'Você nasceu para ser privilegiado entre a nobreza. A menos que um de seus pais seja o regente, sua família serve um nobre de posição superior, mas os nobres menores servem sua família por sua vez.',
            4 => 'Você não foi criado por sua família biológica e cresceu em uma família de raça diferente da sua.',
            5 => 'Você não foi criado por sua família biológica, mas sim por outra família de sua raça ou cultura.',
            6 => 'Seus pais tiveram um encontro amoroso que resultou em seu nascimento fora do casamento. Você conhece um de seus pais, mas o outro permanece desconhecido ou, na melhor das hipóteses, uma presença distante.',
            7 => 'Quando você nasceu, você foi abençoado por um ser de grande poder, como um anjo, azata ou gênio. Esta bênção protegeu você de certos perigos ou marcou você como especial para alguma divindade.',
            8 => 'Seu nascimento foi causado por meios violentos e involuntários. Você tem um dos pais e o outro provavelmente permanece desconhecido.',
            9 => 'Você nasceu em uma época diferente, seja no passado distante ou no futuro distante. Algum acontecimento o deslocou do seu tempo, e os modos e costumes do presente parecem-lhe estranhos e alheios.',
            10 => 'Você nasceu na escravidão ou na servidão. Seus pais provavelmente são escravos ou servos, ou você foi vendido como escravo quando era criança.',
            11 => 'Quando você nasceu, uma poderosa entidade diabólica manchou seu sangue de alguma forma e o amaldiçoou como um agente de profecia sombria.',
            12 => 'Você nasceu em uma família que já foi honrada em sua sociedade, mas desde então caiu em desgraça. Agora o nome da sua família é odiado e difamado por aqueles que o conhecem, colocando você em guarda.',
            13 => 'Você é o herdeiro de uma família com um nome antigo e um passado distinto. Sua família pode ser rica ou de classe média, mas seu nome vale o dobro de sua fortuna.',
            14 => 'Quando você nasceu, você foi deixado para morrer, mas por alguma reviravolta nas circunstâncias você sobreviveu.',
            15 => 'Uma divindade marcou você. Essa marca pode estar no seu corpo ou na sua alma.',
            16 => 'Durante o seu nascimento você foi exposto a uma potente fonte de energia divina.',
            17 => 'Você nasceu durante uma conjunção particularmente poderosa ou em algum outro momento de poder.',
            18 => 'Seu nascimento foi predito, tanto recentemente quanto durante a última geração, até milhares de anos atrás.',
            19 => 'Você renasceu em muitos ciclos e poderá renascer em muitos mais até realizar a tarefa final para a qual está destinado.',
            20 => 'Os sábios, sacerdotes ou magos de sua sociedade decretaram seu nascimento como um presságio de uma era ou evento vindouro – talvez você seja um presságio promissor, talvez um dos tempos sombrios que virão.',
        ];
    }
}
