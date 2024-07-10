<?php

namespace Maxrodrigues\BackgroundGenerator;

use function Laravel\Prompts\select;

class Questions
{
    /**
     * question: 'Você quer lançar magias ou esmagar coisas?'
     */
    public static function youWantSpellOrSmashQuestion()
    {
        return select('Você quer lançar magias ou esmagar coisas?', [
            'magic' => 'Lançar magias',
            'smash' => 'Esmagar!!',
            'can_both' => 'Posso fazer os dois?',
        ]);
    }

    /**
     * question: 'Você é religioso?'
     */
    public static function castSpellsQuestion()
    {
        return select('Você é religioso?', [
            'cleric' => 'Quer ouvir a palavra do meu senhor e salvador',
            'spells_really_no' => 'Na verdade não',
        ]);
    }

    /**
     * question: 'Gosta de estudar?'
     */
    public static function magicLikeStudyQuestion()
    {
        return select('Gosta de estudar?', [
            'studying_is_for_muggles' => 'Não, estudar é pra trouxas.',
            'yes_i_love_it' => 'Sim, eu amo estudar.',
        ]);
    }

    /**
     * question: 'Nasceu com poderes magicos?'
     */
    public static function bornMagicPowersQuestion()
    {
        return select('Nasceu com poderes magicos?', [
            'warlock' => 'Não exatamente.',
            'sorcerer' => 'Claro! Está no meu sangue.',
        ]);
    }

    /**
     * question: 'Gosta de música?'
     */
    public static function likeMusicQuestion()
    {
        return select('Gosta de música?', [
            'music_really_no' => 'Não muito.',
            'bard' => 'Escrevo poesias também.',
        ]);
    }

    /**
     * question: 'Gosta de animais?'
     */
    public static function likeAnimalsQuestion()
    {
        return select('Gosta de animais?', [
            'wizard' => 'Prefiro criaturas magicas.',
            'druid' => 'Eu prefiro animais do que pessoas.',
        ]);
    }

    /**
     * question: 'De perto ou longe?'
     */
    public static function closeOrFarQuestion()
    {
        return select('De perto ou longe?', [
            'close' => 'Perto',
            'far' => 'Longe',
        ]);
    }

    /**
     * question: 'Você luta por uma causa??'
     */
    public static function figthForCauseQuestion()
    {
        return select('Você luta por uma causa?',
            [
                'money' => 'Dinheiro serve?',
                'believe' => 'Sim, minhas crenćas me definem',
            ]);
    }

    /**
     * question: 'Então... Você é bom com pessoas?'
     */
    public static function youGoodWithPeopleQuestion()
    {
        return select('Então... Você é bom com pessoas?', [
            'patrolman' => 'Não, prefiro animais.',
            'far_everyone_loves_me' => 'Sim, todo mundo me adora!',
        ]);
    }

    /**
     * question: 'Você é civilizado?'
     */
    public static function youreCivilizedQuestion()
    {
        return select('Você é civilizado?',
            [
                'fighter' => 'Bom, não é como se eu comesse pessoas',
                'barbarian' => 'Não, eu fui educado pela natureza',
            ]
        );
    }

    /**
     * question: 'Você sabe artes marciais?'
     */
    public static function knowMartialArtsQuestion()
    {
        return select('Você sabe artes marciais?',
            [
                'paladin' => 'Não',
                'monk' => 'Meus punhos desejam justića',
            ]);
    }

    /**
     * question: 'Você é sorrateiro?'
     */
    public static function youSneakyQuestion()
    {
        return select('Você é sorrateiro?',
            [
                'rogue' => 'Eu sou a noite!',
                'sneaky_really_no' => 'Não muito',
            ]);
    }

    /**
     * question: 'Você prefere feitićos ou corpo a corpo?'
     */
    public static function spellsOrMeleeQuestion()
    {
        return select('Você prefere feitićos ou corpo a corpo?',
            [
                'spells_extra' => 'Não, feitićoes são um extra!',
                'bard' => 'Sim, corpo a corpo é coisa de perdedor.',
            ]);
    }

    /**
     * question: 'Você quer ser rico?'
     */
    public static function wannaRichQuestion()
    {
        return select('Você quer ser rico?', [
            'rich_i_dont_no' => 'Sei lá',
            'rogue' => 'Isso é um convite?',
        ]);
    }

    /**
     * question: 'Você é bom com pessoas?'
     */
    public static function bothGoodWithPeopleQuestion()
    {
        return select('Você é bom com pessoas?', [
            'really_dont_no' => 'Não muito.',
            'everyone_loves_me' => 'Sim, todo mundo me adora!',
        ]);
    }

    /**
     * question: 'Você Gosta de animais?'
     */
    public static function youLikeAnimalsQuestion()
    {
        return select('Você Gosta de animais?', [
            'druid' => 'Eles são tão FOFOS!!!',
            'animals_whatever' => 'Tanto faz.',
        ]);
    }
}
