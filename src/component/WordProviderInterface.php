<?php

namespace Pherserk\WordProvider\component;

use Pherserk\Language\model\LanguageInterface;
use Pherserk\WordExtractor\model\UnclassifiedWord;
use Pherserk\WordProvider\model\ClassifiedWord;

interface WordProiderInterface
{
     /**
      * @param UnclassifiedWord[] $words
      * @param LanguageInterface $language
      * @param int $minimumClassificationsCount
      *
      * @return ClassifiedWord[]
      */
     public function search(array $words, LanguageInterface $language, int $minimumClassificationsCount) : array;
}
