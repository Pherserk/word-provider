<?php

namespace Pherserk\WordProvider\model\it;

use Pherserk\Language\model\LanguageInterface;
use Pherserk\WordProvider\model\ClassifiedWord as BaseClassifiedWord;

class ClassifiedWord extends BaseClassifiedWord
{
    const LANGUAGE_CODE = 'IT';

    const NAME_TYPE = 'name';
    const VERB_TYPE = 'verb';
    const PRONOUN_TYPE = 'pronoun';
    const ARTICLE_TYPE = 'article';
    const PREPOSITION_TYPE = 'preposition';
    const ADVERB_TYPE = 'adverb';
    const CONJUNCTION = 'conjunction';    

    private $word;
 
    private $language;
 
    private $type;

    public function __construct(string $word, LanguageInterface $language, string $type)
    {
        parent::__construct($word, $language, $type);
    } 
}
