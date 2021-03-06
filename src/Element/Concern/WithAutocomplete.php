<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutocomplete
{
    /**
     * Indicates whether controls in this form can by default have their values
     * automatically completed by the browser.
     */
    public function withAutocomplete(string $value): static
    {
        $this->with(Attr::Autocomplete, $value);

        return $this;
    }
    
    public function withoutAutocomplete(): static
    {
        $this->without(Attr::Autocomplete);
        
        return $this;
    }
} 
