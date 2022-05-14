<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithReversed
{
    /**
     * Indicates whether the list should be displayed in a descending order
     * instead of a ascending.
     */
    public function withReversed(string|bool $value): static
    {
        $this->with(Attr::Reversed, $value);

        return $this;
    }
    
    public function withoutReversed(): static
    {
        $this->without(Attr::Reversed);
        
        return $this;
    }
} 
