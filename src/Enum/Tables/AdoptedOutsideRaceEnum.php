<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum AdoptedOutsideRaceEnum: string
{
    /** Adopted by Dragons */
    case ADOPTED_BY_DRAGONS = 'Adotado por dragões';

    /** Adopted by the Fey */
    case ADOPTED_BY_FEY = 'Adotado por ente feérico';

    /** Raised Among the Dead */
    case RAISED_AMONG_THE_DEAD = 'Adotado por mortos-vivos';

    /** Raised by Angels */
    case RAISED_BY_ANGELS = 'Adotado por anjos';

    /** Raised by Beasts */
    case RAISED_BY_BEASTS = 'Adotado por animais';

    /** Raised by Civilized Humanoids */
    case RAISED_BY_CIVILIZED_HUMANOIDS = 'Adotado por raća humanoide civilizada';

    /** Raised by Savage Humanoids */
    case RAISED_BY_SAVAGE_HUMANOIDS = 'Adotado por raça humanoide selvagem';

    /** Fiend Raised */
    case FIEND_RAISED = 'Adotado por fiends';


    private function detail(): array
    {
        return [
            1 => 'Para seus próprios propósitos, um dragão criou você como se fosse seu. Você aprendeu a linguagem e a história, a sabedoria, o poder e a força dos dragões.',
            2 => 'Seus pais adotivos eram criaturas feéricas como korreds, duendes ou uma dríade.',
            3 => 'Seu pai adotivo é uma criatura inanimada, como um espectro, fantasma, lich ou vampiro. Você provavelmente foi criado em corredores vazios e em ruínas, entre tumbas e criptas, por uma criatura que se alimenta de vida. Qual foi o propósito de criá-lo, ninguém pode dizer.',
            4 => 'Os anjos assistiram ao seu nascimento e levaram você para morar com eles nos céus. Esses seres cósmicos expandiram a sua visão para abranger não apenas o mundo, mas o universo maior. Você sabe que onde quer que vá, seus pais angélicos cuidam de você.',
            5 => 'Quando você foi separado de seus pais biológicos, você foi encontrado e criado por feras selvagens. Seus costumes são os da natureza e, junto com seus instintos avançados de sobrevivência, você adotou os hábitos naturais de uma fera específica.',
            6 => 'Você foi criado por uma comunidade de humanóides civilizados de uma raça diferente da sua (escolhida pelo seu Mestre). Suas atitudes, crenças e valores refletem essa raça, embora surjam frequentemente características de sua verdadeira natureza.',
            7 => 'Você foi criado por humanóides selvagens, como orcs, kobolds, gnolls, trogloditas ou homens-lagarto. Como resultado, seus valores, costumes e tradições são os de seus pais adotivos, embora surjam frequentemente características de sua verdadeira natureza.',
            8 => 'Você foi separado de seus pais naturais e criado por um demônio que lhe ensinou a crueldade e a malícia dos deuses e trabalhou para transformá-lo em seu próprio instrumento mortal para corromper almas inocentes.',
        ];
    }
}
