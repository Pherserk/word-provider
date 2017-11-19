<?php

namespace Pherserk\WordProvider\model;

use Pherserk\Language\model\LanguageInterface;
use Pherserk\Word\model\WordInterface;

abstract class ClassifiedWord implements WordInterface
{
   private $word;
   
   private $language;

   private $type;

   public function __construct(string $word, LanguageInterface $language, string $type)
   {
       if ($language->getCode() != $self::LANGUAGE_CODE) {
           throw new \InvalidArgumentException('Expected '  . $self::LANGUAGE_CODE . ' '  $language->getCode() . ' given');
       }
       
       $this->word = $word;
       $this->language = $language;
       $this->type = $type;
   }

   public function getWord() : string
   {
       return $this->word;
   }

   public function getLanguage() : LanguageInterface
   {
       return $this->language;
   }
  
   public function getType() : string
   {
       return $this->type;
   }
}

