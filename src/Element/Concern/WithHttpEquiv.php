<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHttpEquiv
{
    /**
     * Defines a pragma directive.
     */
    public function withHttpEquiv(string $value): static
    {
        $this->with(Attr::HttpEquiv, $value);

        return $this;
    }
    
    public function withoutHttpEquiv(): static
    {
        $this->without(Attr::HttpEquiv);
        
        return $this;
    }
} 
