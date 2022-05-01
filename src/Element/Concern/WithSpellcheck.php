<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSpellcheck
{
    /**
     * Indicates whether spell checking is allowed for the element.
     */
    public function spellcheck(string $value, bool $append = false): static
    {
        $this->with(Attr::Spellcheck, $value, $append);

        return $this;
    }
} 
