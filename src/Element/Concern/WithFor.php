<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithFor
{
    /**
     * Describes elements which belongs to this one.
     */
    public function withFor(string $value): static
    {
        $this->with(Attr::For, $value);

        return $this;
    }
    
    public function withoutFor(): static
    {
        $this->without(Attr::For);
        
        return $this;
    }
} 
