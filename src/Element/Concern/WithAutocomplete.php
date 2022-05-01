<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAutocomplete
{
    /**
     * Indicates whether controls in this form can by default have their values
     * automatically completed by the browser.
     */
    public function autocomplete(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autocomplete, $value);
        
        return $this;
    }
} 
