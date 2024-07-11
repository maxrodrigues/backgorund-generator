<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum ChildhoodEventEnum: string
{
    /** Academy Training */
    case ACADEMY_TRAINING = 'Treinado na academia';

    /** Betrayal */
    case BETRAYAL = 'Traicão';

    /** Bullied */
    case BULLIED = 'Vitima de Bullying';

    /** Competition Champion */
    case COMPETITION_CHAMPION = 'Campeão de competição';

    /** Death in the Family */
    case DEATH_IN_THE_FAMILY = 'Morte na família';

    /** Died */
    case DIED = 'Morreu';

    /** Fall of a Major Power */
    case FALL_OF_A_MAJOR_POWER = 'Influenciado por grande poder';

    /** Fell in with a Bad Crowd */
    case FELL_IN_WITH_A_BAD_CROWD = 'Influenciado por pessoas ruins';

    /** First Kill */
    case FIRST_KILL = 'Primeira Morte';

    /** Troubled First Love */
    case TROUBLED_FIRST_LOVE = 'Primeiro amor problemático';

    /** Imprisoned */
    case IMPRISONED = 'Preso';

    /** Inheritance */
    case INHERITANCE = 'Heranća';

    /** Kidnapped */
    case KIDNAPPED = 'Sequestrado';

    /** Magical Gift */
    case MAGICAL_GIFT = 'Presente Mágico';

    /** Major Disaster */
    case MAJOR_DISASTER = 'Grande Desastre';

    /** Major Event */
    case MENTORSHIP = 'Mentor ou Patrocinador';

    /** Met a Fantastic Creature */
    case MET_A_FANTASTIC_CREATURE = 'Conheci uma creatura fantástica';

    /** Ordinary Childhood */
    case ORDINARY_CHILDHOOD = 'Infância Comum';

    /** Raiders */
    case RAIDERS = 'Invasores';

    /** The War */
    case WAR = 'Guerra';

    public function detail()
    {
        return [
            1 => 'Você frequentou uma academia particular onde estudou diversas habilidades e obteve treinamento em sua profissão atual. Quer você tenha sido um aluno brilhante ou um aluno que abandonou o curso, o ambiente universitário foi seu lar durante boa parte de seus anos de formação.',
            2 => 'Um amigo ou membro da família em quem você confiava mais do que qualquer outra pessoa o traiu. Desde então, você nunca confiou totalmente em ninguém e prefere confiar em suas próprias habilidades em vez de confiar nos outros.',
            3 => 'Na infância, você foi uma vítima – uma presa fácil para aqueles que são mais fortes ou mais inteligentes do que você. Eles batiam em você quando podiam, usando você como esporte. Este abuso alimentou uma poderosa chama de vingança.',
            4 => 'Você se destacou desde cedo ao vencer uma competição. Poderia ter sido uma competição marcial de armas, uma exibição de aprendizes de mágico, apostas altas ou algo mundano como um campeonato de alimentação.',
            5 => 'Você foi profundamente afetado pela morte do parente mais próximo de você – um pai, um avô, um irmão favorito, uma tia, um tio ou um primo. Esta morte afetou você profundamente e você nunca foi capaz de abandoná-la.',
            6 => 'Você morreu ou esteve tão perto da morte que caminhou na fronteira entre os reinos dos vivos e dos mortos. Tendo passado do domínio da vida uma vez, você tem uma perspectiva única da vida, talvez até uma maior apreciação por ela – ou talvez sua experiência tenha feito com que você rejeitasse todas as coisas triviais, concentrando-se apenas em assuntos de verdadeira importância.',
            7 => 'Nos seus primeiros anos, um antigo poder com influência de longo alcance entrou em declínio. Poderia ter sido um império, uma grande organização ou gangue, ou uma pessoa como um rei benevolente ou um ditador malvado. Suas primeiras memórias foram fundadas em um mundo onde esta grande potência afetou sua região para o bem ou para o mal.',
            8 => 'Em sua juventude, você conviveu com uma multidão brutal, maligna ou sádica. Você pode ter pertencido a uma gangue, a uma guilda de ladrões ou a alguma outra organização nefasta. Foi fácil ceder à pressão e fazer tudo o que eles mandassem, e sua perspectiva é influenciada pela ambiguidade moral.',
            9 => 'Você tem sangue nas mãos desde a juventude, quando tirou a vida de outra criatura pela primeira vez. Quer esse ato tenha lhe causado repulsa ou prazer, foi uma experiência formativa.',
            10 => 'Seu primeiro amor foi tudo o que você imaginou que seria. Isto é, até você se separar do seu amado. Isto pode ter sido resultado da distância, mudança de perspectivas, morte ou diferenças de classe ou família. Alguns disseram que isso o deixou cansado – você acha que isso lhe proporcionou uma visão sobre como o mundo realmente funciona.',
            11 => 'Sua ficha criminal começou quando você era jovem. Você foi preso, punido e possivelmente exibido em público como um criminoso. Independentemente de você ter cometido o crime ou não, a experiência permaneceu com você.',
            12 => 'Uma grande soma de riqueza ou propriedade foi legada a você desde muito jovem, proporcionando-lhe recursos extraordinários. O custo de vida diário deixou de preocupá-lo e você aprendeu que há pouco que o dinheiro não possa comprar.',
            13 => 'Você foi sequestrado em algum momento de sua infância. Os sequestradores podem ter sido piratas, traficantes de escravos, ladrões em busca de resgate, uma guilda poderosa buscando chantagear seus pais, uma seita e assim por diante. Antes de ser libertado, ser resgatado ou escapar, você aprendeu vários aspectos do submundo do crime.',
            14 => 'Quando você era criança, você encontrou, roubou ou ganhou um item mágico que lhe deu uma habilidade extraordinária. Você pode ter usado este item para travessura, crime ou bem. Desde aquela época, os itens mágicos sempre exerceram um fascínio especial para você.',
            15 => 'Você testemunhou – e sobreviveu – a um grande desastre na sua infância, como um grande incêndio, inundação, terremoto, vulcão ou tempestade. Ele destruiu o assentamento onde você morava, fosse uma pequena vila, uma grande cidade ou uma ilha inteira.',
            16 => 'Um mentor ou patrono se interessou pelo seu desenvolvimento e se ofereceu para treiná-lo ou patrociná-lo. Os motivos desta criatura podem não ser totalmente claros, mas sem a sua influência você não seria quem é.',
            17 => 'Quando você era criança, você fez contato com uma criatura mágica, como um dragão, unicórnio, gênio, duende ou criatura semelhante. Você aprendeu uma lição poderosa ou um truque de mágica com aquela criatura. Esse encontro mudou sua vida e te tornou diferente das outras crianças.',
            18 => 'Sua infância foi bastante comum, sem grandes bênçãos ou catástrofes – um forte contraste com uma vida de aventuras. Você viveu sua vida na expectativa de crescer para poder afetar o cenário monótono sobre o qual sua vida mundana foi pintada. Agora que você cresceu, é fácil sentir falta daqueles dias tranquilos em que nada parecia acontecer.',
            19 => 'Uma horda de invasores atacou seu assentamento e matou vários de seus habitantes. Poderia ter sido uma tribo de humanóides brutais ou o exército conquistador de uma nação civilizada. Como resultado, você guarda um profundo ressentimento em relação a uma determinada facção, raça ou país.',
            20 => 'Você cresceu tendo como pano de fundo um grande conflito militar que afetou grande parte do seu mundo infantil. Você se acostumou com a escassez de alimentos, vivendo em território ocupado e se deslocando de um lugar para outro. Várias pessoas que você conheceu na infância foram perdidas na guerra, incluindo membros de sua família.',
        ];
    }
}
