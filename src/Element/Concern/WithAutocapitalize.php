<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutocapitalize
{
    /**
     * Sets whether input is automatically capitalized when entered by user
     */
    public function withAutocapitalize(string $value, bool $append = false): static
    {
        $this->with(Attr::Autocapitalize, $value, $append);

        return $this;
    }
    
    public function withoutAutocapitalize(): static
    {
        $this->without(Attr::Autocapitalize);
        
        return $this;
    }
} 
