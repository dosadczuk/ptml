<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSpellcheck
{
    /**
     * Indicates whether spell checking is allowed for the element.
     */
    public function spellcheck(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Spellcheck, $value);
        
        return $this;
    }
} 
