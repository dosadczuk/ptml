<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutofocus
{
    /**
     * The element should be automatically focused after the page loaded.
     */
    public function withAutofocus(string $value, bool $append = false): static
    {
        $this->with(Attr::Autofocus, $value, $append);

        return $this;
    }
    
    public function withoutAutofocus(): static
    {
        $this->without(Attr::Autofocus);
        
        return $this;
    }
} 
