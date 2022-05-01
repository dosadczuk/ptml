<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAutocapitalize
{
    /**
     * Sets whether input is automatically capitalized when entered by user
     */
    public function autocapitalize(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autocapitalize, $value);
        
        return $this;
    }
} 
