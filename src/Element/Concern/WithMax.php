<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMax
{
    /**
     * Indicates the maximum value allowed.
     */
    public function withMax(string $value, bool $append = true): static
    {
        $this->with(Attr::Max, $value, $append);

        return $this;
    }
    
    public function withoutMax(): static
    {
        $this->without(Attr::Max);
        
        return $this;
    }
} 
