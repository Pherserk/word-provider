<?php

namespace Pherserk\WordProvider\model;

use Pherserk\Word\model\WordInterface;

abstract class ClassifiedWord implements WordInterface
{
   private $word;
   
   private $type;

   public function __construct(string $word, string $type)
   {
       $this->word = $word;
       $this->type = $type;
   }

   public function getWord() : string
   {
       return $this->word;
   }
  
   public function getType() : string
   {
       return $this->type;
   }
}

