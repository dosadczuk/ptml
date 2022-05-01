<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCsp
{
    /**
     * Specifies the Content Security Policy that an embedded document must
     * agree to enforce upon itself.
     */
    public function csp(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Csp, $value);
        
        return $this;
    }
} 
