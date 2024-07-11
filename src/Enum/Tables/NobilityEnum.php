<?php

namespace Maxrodrigues\BackgroundGenerator\Enum\Tables;

enum NobilityEnum: string
{
    /** Gentry */
    case GENTRY = 'Senhor Feudal';

    /** Knight */
    case KNIGHT = 'Cavaleiro';

    /** Baron */
    case BARON = 'Barão';

    /** Count */
    case COUNT = 'Conde';

    /** Duke */
    case DUKE = 'Duque';

    /** Minor Prince */
    case MINOR_PRINCE = 'Principado';

    /** Regent */
    case REGENT = 'Regente';

    private function detail()
    {
        return [
            1 => 'Você é filho de um senhor, senhora ou nobre menor com renda, terras hereditárias como um feudo e títulos. Você provavelmente cresceu em uma mansão e seus pais receberam homenagens de camponeses. Seus pais servem a um barão, conde ou duque superior.',
            2 => 'Você é filho de um cavaleiro, um nobre com propriedades, títulos e terras que serve a um senhor. Sua família prestou juramento de fidelidade a um soberano — como um barão, conde ou duque — e se compromete com o serviço militar em nome dele. Como filho de um cavaleiro, você pode servir como escudeiro de outro cavaleiro enquanto segue seu próprio caminho para a cavalaria.',
            3 => 'Você é filho de um barão ou baronesa, um nobre responsável por uma terra que abrange vários feudos menores que prestam tributos. Seus pais recebem ordens diretamente do monarca e espera-se que você compareça à corte real. Você tem direito a propriedades hereditárias, títulos e terras.',
            4 => 'Você é o filho nobre de um conde ou condessa. Os membros de sua família recebem títulos hereditários, terras e propriedades e estão entre os nobres mais ricos de seu domínio. Cavaleiros e senhores menores prestam homenagem à sua família, e seus pais atendem diretamente ao monarca. Espera-se que você compareça à corte real.',
            5 => 'Você é filho de um duque ou duquesa, o nobre mais poderoso do reino, além da família real. Seus pais atendem diretamente ao monarca e ocupam o lugar mais alto na corte. Suas terras, títulos e propriedades são importantes, e muitos senhores e cavaleiros servem sob o comando de seus pais.',
            6 => 'Você é filho de um príncipe ou princesa e faz parte da família real. Você não é o próximo na sucessão, mas seu poder e riqueza são realmente grandiosos.',
            7 => 'Você é um príncipe ou princesa, filho ou filha do monarca. Você deve lealdade diretamente aos seus pais e a mais ninguém. Poucos comandam o poder e a riqueza que você possui, e sua presença inspira grande respeito, se não total admiração, entre aqueles que se ajoelham diante da coroa.',
        ];
    }
}
