<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCsp
{
    /**
     * Specifies the Content Security Policy that an embedded document must
     * agree to enforce upon itself.
     */
    public function withCsp(string $value): static
    {
        $this->with(Attr::Csp, $value);

        return $this;
    }
    
    public function withoutCsp(): static
    {
        $this->without(Attr::Csp);
        
        return $this;
    }
} 
