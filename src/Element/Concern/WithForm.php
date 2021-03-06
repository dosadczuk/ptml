<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithForm
{
    /**
     * Indicates the form that is the owner of the element.
     */
    public function withForm(string $value): static
    {
        $this->with(Attr::Form, $value);

        return $this;
    }
    
    public function withoutForm(): static
    {
        $this->without(Attr::Form);
        
        return $this;
    }
} 
