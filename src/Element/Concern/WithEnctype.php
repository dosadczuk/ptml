<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithEnctype
{
    /**
     * Defines the content type of the form data when the method is POST.
     */
    public function withEnctype(string $value): static
    {
        $this->with(Attr::Enctype, $value);

        return $this;
    }
    
    public function withoutEnctype(): static
    {
        $this->without(Attr::Enctype);
        
        return $this;
    }
} 
