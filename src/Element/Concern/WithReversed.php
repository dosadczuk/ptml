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
    public function withReversed(string $value, bool $append = true): static
    {
        $this->with(Attr::Reversed, $value, $append);

        return $this;
    }
    
    public function withoutReversed(): static
    {
        $this->without(Attr::Reversed);
        
        return $this;
    }
} 
