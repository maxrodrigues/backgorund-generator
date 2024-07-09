<?php

namespace Maxrodrigues\BackgroundGenerator\Trait;

use function Laravel\Prompts\select;

trait MagicalQuestionsTrait
{
    public static function castSpellsQuestion()
    {
        return select('Você é religioso?', [
            'cleric' => 'Quer ouvir a palavra do meu senhor e salvador',
            'spellsreallyno' => 'Na verdade não',
        ]);
    }

    public static function magicLikeStudyQuestion()
    {
        return select('Gosta de estudar?', [
            'studyingisformuggles' => 'Não, estudar é pra trouxas.',
            'yesiloveit' => 'Sim, eu amo estudar.',
        ]);
    }


}