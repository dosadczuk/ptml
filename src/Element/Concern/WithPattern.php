<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithPattern
{
    /**
     * Defines a regular expression which the element's value will be validated
     * against.
     */
    public function pattern(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Pattern, $value);
        
        return $this;
    }
} 
