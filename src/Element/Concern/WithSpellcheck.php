<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSpellcheck
{
    /**
     * Indicates whether spell checking is allowed for the element.
     */
    public function withSpellcheck(string $value, bool $append = true): static
    {
        $this->with(Attr::Spellcheck, $value, $append);

        return $this;
    }
    
    public function withoutSpellcheck(): static
    {
        $this->without(Attr::Spellcheck);
        
        return $this;
    }
} 
