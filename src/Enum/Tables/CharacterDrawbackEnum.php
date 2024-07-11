<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum CharacterDrawbackEnum: string
{
    /** Attachment (Object) */
    case OBJECT = 'Objeto';

    /** Attachment (Person) */
    case PERSON = 'Pessoa';

    /** Family */
    case FAMILY = 'Familia';

    /** Justice */
    case JUSTICE = 'Justića';

    /** Love */
    case LOVE = 'Amor';

    /** Loyalty */
    case LOYALTY = 'Lealdade';

    /** Material Wealth */
    case MATERIAL_WEALTH = 'Riquesa Material';

    /** Pleasure */
    case PLEASURE = 'Prazer';

    /** Power */
    case POWER = 'Poder';

    /** Pride */
    case PRIDE = 'Orgulho';

    /** Race */
    case RACE = 'Raca';

    /** Religion */
    case RELIGION = 'Religião';

    /** Reputation or Fame */
    case REPUTATION = 'Reputação ou Fama';

    /** Safety or Security */
    case SAFETY = 'Segurança ou Proteção';

    /** Self-Doubt */
    case SELF_DOUBT = 'Dívida Pessoal';

    /** Social Acceptance */
    case SOCIAL_ACCEPTANCE = 'Aceitćão Social';

    /** The Future */
    case FUTURE = 'O Futuro';

    /** The Past */
    case PAST = 'O Passado';

    /** Worldview */
    case WORLDVIEW = 'Visão do Mundo';

    /** Youth */
    case YOUTH = 'Juventude';


    private function detail()
    {
        return [
            1 => 'Você está apegado a um bem precioso com imenso valor e significado sentimental. Sem ele, você não é mais você mesmo e está sujeito a sofrer de depressão, mau humor ou comportamento agressivo.',
            2 => 'Você está apegado a uma pessoa específica – um amigo, membro da família ou ente querido – que significa mais do que qualquer coisa ou pessoa no mundo. Seus pensamentos sempre voltam para essa pessoa.',
            3 => 'Sua família significa tudo para você e não há nada que você não faria por eles. Talvez seus laços se estendam a todo o seu clã ou linhagem, ou talvez haja um membro específico de sua família que você considera mais próximo do que qualquer outro.',
            4 => 'A injustiça e a injustiça são intoleráveis. Sempre que você os testemunha, você se sente compelido a agir ou falar abertamente. Quando você é pessoalmente injustiçado, você precisa de apaziguamento – ou vingança, se não o receber.',
            5 => 'Seu amor por alguém motiva você. Quando essa pessoa está em perigo, você tende a se sentir fraco, impotente ou com raiva.',
            6 => 'Você valoriza a lealdade acima de todas as coisas. Você valoriza os amigos, associados e amantes que conquistou ao longo dos anos e, quando alguém quebra sua confiança ou o trai de alguma forma, você fica totalmente perturbado.',
            7 => 'Você tem uma fraqueza por coisas materiais – dinheiro, joias finas, alimentos requintados, itens caros ou raros e assim por diante. Quando essas riquezas estão ao seu alcance, você é levado a possuí-las e as reivindica como um colecionador honesto ou como um ladrão astuto.',
            8 => 'Você anseia por luxo, entretenimento e prazer. Você pode se entregar a todas as fantasias passageiras ou resistir a uma tentação que constantemente o atormenta.',
            9 => 'Você anseia pela capacidade de influenciar o mundo ao seu redor, seja ele tão pequeno quanto uma vila ou tão grande quanto um plano de realidade.',
            10 => 'Você apresenta ao mundo uma imagem que não pode ser manchada. Quando alguém questiona seus motivos, critica suas ações ou insulta sua honra ou orgulho, você questiona a amizade dele ou o considera um dos seus inimigos até que ele faça as pazes.',
            11 => 'Você se sente realmente confortável apenas perto de outras pessoas de sua raça e tem dificuldade em colocar fé ou confiança em pessoas de raças diferentes da sua.',
            12 => 'Suas crenças são de suma importância em sua vida, quer você pertença a um templo, siga um culto ou pratique uma filosofia religiosa de forma independente. Quando outros questionam ou atacam as crenças, princípios, relíquias ou estruturas da sua fé, você responde com fúria.',
            13 => 'Você trabalhou duro para estabelecer sua identidade e reputação, e alguém que o calunia ou insulta deve responder por isso. Você se esforça para promover sua identidade a ponto de todos conhecerem sua reputação.',
            14 => 'Você é cauteloso e desconfiado de outras pessoas que possam prejudicá-lo, roubá-lo ou trair sua confiança. Como tal, você dorme levemente, sempre suspeitando que alguém ou algo se aproximará de você no escuro. Mesmo quando se relaciona com pessoas que confiam em você, sempre existe o medo de que elas abriguem agendas ocultas ou mudem e se voltem contra você.',
            15 => 'Não importa o que você faça, nunca é bom o suficiente. Você não pode deixar de ver em suas vitórias muitas pequenas derrotas e fracassos. Se você fosse mais forte, mais inteligente, mais rápido ou mais poderoso, talvez pudesse ser melhor. No entanto, preso no corpo e na mente que possui, você sente que está destinado ao fracasso.',
            16 => 'Você quer que os outros o aceitem, que acreditem que você é especial e digno de mérito. Você tem vergonha de suas falhas sociais e violações de etiqueta. A rejeição está entre seus maiores medos. Você pode fazer de tudo para ser aceito ou buscar o favor de seus colegas.',
            17 => 'As vossas preocupações não residem no presente, mas na preparação para o futuro. Você pode ser um planejador ávido e organizado, ou talvez veja os sinais de uma era das trevas ou de um período conturbado que se aproxima. Você se comporta de maneira cautelosa, conservadora e metodicamente ao planejar eventos que um dia poderão ocorrer.',
            18 => 'Você deseja que o mundo retorne a uma era passada. Você adotou os costumes e o estilo desta época e é fascinado por seus costumes, relíquias e artefatos, e pelas figuras históricas da época. Talvez você viva tanto nesta era passada que sua conexão com o presente seja tênue. Ou sua pretensão irrita os outros.',
            19 => 'Aos seus olhos, a sua filosofia moral – o seu alinhamento – é o único caminho correto e verdadeiro do mundo. Talvez você gentilmente tenha pena, discuta ou brigue com aquelas almas equivocadas que não veem o mundo do seu jeito ou pela luz da razão.',
            20 => 'Você reflete sobre sua juventude como uma época de ouro, sempre presente em sua mente e que se recusa a desaparecer em segundo plano. A cada dia você se sente envelhecendo e se aproximando do seu fim inevitável. Você busca maneiras de parecer e se sentir jovem na tentativa de reacender o fogo da sua adolescência, mas, apesar de suas tentativas, percebe que seu tempo ainda está cada vez mais próximo.',

        ];
    }
}
