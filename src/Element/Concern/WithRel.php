<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRel
{
    /**
     * Specifies the relationship of the target object to the link object.
     */
    public function withRel(string $value, bool $append = false): static
    {
        $this->with(Attr::Rel, $value, $append);

        return $this;
    }
    
    public function withoutRel(): static
    {
        $this->without(Attr::Rel);
        
        return $this;
    }
} 
