<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDisabled
{
    /**
     * Indicates whether the user can interact with the element.
     */
    public function withDisabled(string|bool $value): static
    {
        $this->with(Attr::Disabled, $value);

        return $this;
    }
    
    public function withoutDisabled(): static
    {
        $this->without(Attr::Disabled);
        
        return $this;
    }
} 
