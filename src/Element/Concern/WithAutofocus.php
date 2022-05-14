<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutofocus
{
    /**
     * The element should be automatically focused after the page loaded.
     */
    public function withAutofocus(string|bool $value): static
    {
        $this->with(Attr::Autofocus, $value);

        return $this;
    }
    
    public function withoutAutofocus(): static
    {
        $this->without(Attr::Autofocus);
        
        return $this;
    }
} 
