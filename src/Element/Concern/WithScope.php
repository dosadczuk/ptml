<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithScope
{
    /**
     * Defines the cells that the header test (defined in the th element)
     * relates to.
     */
    public function scope(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Scope, $value);
        
        return $this;
    }
} 
