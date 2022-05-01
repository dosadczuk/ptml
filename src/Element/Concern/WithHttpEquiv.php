<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithHttpEquiv
{
    /**
     * Defines a pragma directive.
     */
    public function httpEquiv(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::HttpEquiv, $value);
        
        return $this;
    }
} 
