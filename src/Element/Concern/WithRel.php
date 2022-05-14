<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRel
{
    /**
     * Specifies the relationship of the target object to the link object.
     */
    public function withRel(string $value): static
    {
        $this->with(Attr::Rel, $value);

        return $this;
    }
    
    public function withoutRel(): static
    {
        $this->without(Attr::Rel);
        
        return $this;
    }
} 
