<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMaxlength
{
    /**
     * Defines the maximum number of characters allowed in the element.
     */
    public function maxlength(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Maxlength, $value);
        
        return $this;
    }
} 
