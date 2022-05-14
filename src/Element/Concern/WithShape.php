<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithShape
{
    /**
     * Specifies the shape of the area.
     */
    public function withShape(string $value): static
    {
        $this->with(Attr::Shape, $value);

        return $this;
    }
    
    public function withoutShape(): static
    {
        $this->without(Attr::Shape);
        
        return $this;
    }
} 
