<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStart
{
    /**
     * Defines the first number if other than 1.
     */
    public function withStart(string|int $value): static
    {
        $this->with(Attr::Start, $value);

        return $this;
    }
    
    public function withoutStart(): static
    {
        $this->without(Attr::Start);
        
        return $this;
    }
} 
