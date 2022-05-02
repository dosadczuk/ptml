<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMaxlength
{
    /**
     * Defines the maximum number of characters allowed in the element.
     */
    public function withMaxlength(string $value, bool $append = true): static
    {
        $this->with(Attr::Maxlength, $value, $append);

        return $this;
    }
    
    public function withoutMaxlength(): static
    {
        $this->without(Attr::Maxlength);
        
        return $this;
    }
} 
