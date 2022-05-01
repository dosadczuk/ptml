<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithRequired
{
    /**
     * Indicates whether this element is required to fill out or not.
     */
    public function required(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Required, $value);
        
        return $this;
    }
} 
