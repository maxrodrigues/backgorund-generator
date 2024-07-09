<?php

namespace Maxrodrigues\BackgroundGenerator;

use Maxrodrigues\BackgroundGenerator\Trait\MagicalQuestionsTrait;
use function Laravel\Prompts\select;

class HelpChooseClass
{
    use MagicalQuestionsTrait;
    public function execute()
    {
        $choice = self::startQuestion();

        $choice = match ($choice) {
            'magic' => self::castSpellsQuestion(),
        };

        $choice = match ($choice) {
            'spellsreallyno' => self::magicLikeStudyQuestion(),
        };

        echo $choice;
    }

    public static function startQuestion()
    {
        return select('Você quer lançar magias ou esmagar coisas?', [
            'magic' => 'Lançar magias',
        ]);
    }
}