<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCrossorigin
{
    /**
     * How the element handles cross-origin requests
     */
    public function withCrossorigin(string $value): static
    {
        $this->with(Attr::Crossorigin, $value);

        return $this;
    }
    
    public function withoutCrossorigin(): static
    {
        $this->without(Attr::Crossorigin);
        
        return $this;
    }
} 
