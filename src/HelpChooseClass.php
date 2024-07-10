<?php

namespace Maxrodrigues\BackgroundGenerator;

class HelpChooseClass
{
    const array CLASSES = [
        'cleric',
        'warlock',
        'wizard',
        'sorcerer',
        'bard',
        'druid',
        'rogue',
        'patrolman',
        'paladin',
        'monk',
        'barbarian',
        'fighter',
    ];

    public function __construct()
    {
        $this->execute();
    }

    public function execute()
    {
        return $this->choosingClass();
    }

    private function choosingClass(): string
    {
        $choice = null;
        while (true) {
            $choice = match ($choice) {
                'magic' => Questions::castSpellsQuestion(),
                'can_both' => Questions::bothGoodWithPeopleQuestion(),
                'smash' => Questions::closeOrFarQuestion(),
                'spells_really_no' => Questions::magicLikeStudyQuestion(),
                'studying_is_for_muggles' => Questions::bornMagicPowersQuestion(),
                'yes_i_love_it' => Questions::likeMusicQuestion(),
                'music_really_no' => Questions::likeAnimalsQuestion(),
                'really_dont_no' => Questions::youLikeAnimalsQuestion(),
                'every_one_loves_me' => Questions::youGoodWithPeopleQuestion(),
                'animals_whatever' => Questions::youSneakyQuestion(),
                'sneaky_really_no' => Questions::spellsOrMeleeQuestion(),
                'spells_extra' => Questions::wannaRichQuestion(),
                'rich_i_dont_no' => Questions::knowMartialArtsQuestion(),
                'close' => Questions::figthForCauseQuestion(),
                'money' => Questions::youreCivilizedQuestion(),
                'believe' => Questions::knowMartialArtsQuestion(),
                'far' => Questions::youGoodWithPeopleQuestion(),
                'far_everyone_loves_me' => Questions::youSneakyQuestion(),
                default => Questions::youWantSpellOrSmashQuestion(),
            };

            if (in_array($choice, self::CLASSES, true)) {
                return $choice;
            }
        }
    }
}
