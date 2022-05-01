<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCrossorigin
{
    /**
     * How the element handles cross-origin requests
     */
    public function withCrossorigin(string $value, bool $append = false): static
    {
        $this->with(Attr::Crossorigin, $value, $append);

        return $this;
    }
    
    public function withoutCrossorigin(): static
    {
        $this->without(Attr::Crossorigin);
        
        return $this;
    }
} 
