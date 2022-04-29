<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSpellcheck
{
    /**
     * Specifies whether the element is to have its spelling and grammar checked or not.
     */
    public function spellcheck(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Spellcheck, $value);
        
        return $this;
    }
}
