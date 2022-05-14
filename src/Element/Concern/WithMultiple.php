<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMultiple
{
    /**
     * Indicates whether multiple values can be entered in an input of the type
     * email or file.
     */
    public function withMultiple(string|bool $value): static
    {
        $this->with(Attr::Multiple, $value);

        return $this;
    }
    
    public function withoutMultiple(): static
    {
        $this->without(Attr::Multiple);
        
        return $this;
    }
} 
