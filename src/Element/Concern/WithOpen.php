<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithOpen
{
    /**
     * Indicates whether the contents are currently visible (in the case of a
     * <details> element) or whether the dialog is active and can be interacted
     * with (in the case of a <dialog> element).
     */
    public function withOpen(string|bool $value): static
    {
        $this->with(Attr::Open, $value);

        return $this;
    }
    
    public function withoutOpen(): static
    {
        $this->without(Attr::Open);
        
        return $this;
    }
} 
