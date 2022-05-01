<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStart
{
    /**
     * Defines the first number if other than 1.
     */
    public function withStart(string $value, bool $append = false): static
    {
        $this->with(Attr::Start, $value, $append);

        return $this;
    }
    
    public function withoutStart(): static
    {
        $this->without(Attr::Start);
        
        return $this;
    }
} 
