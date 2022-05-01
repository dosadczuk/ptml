<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithType
{
    /**
     * Defines the type of the element.
     */
    public function type(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Type, $value);
        
        return $this;
    }
} 
