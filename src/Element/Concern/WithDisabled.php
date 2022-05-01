<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDisabled
{
    /**
     * Indicates whether the user can interact with the element.
     */
    public function withDisabled(string $value, bool $append = false): static
    {
        $this->with(Attr::Disabled, $value, $append);

        return $this;
    }
    
    public function withoutDisabled(): static
    {
        $this->without(Attr::Disabled);
        
        return $this;
    }
} 
