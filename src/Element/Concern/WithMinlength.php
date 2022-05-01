<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMinlength
{
    /**
     * Defines the minimum number of characters allowed in the element.
     */
    public function minlength(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Minlength, $value);
        
        return $this;
    }
} 
