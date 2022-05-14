<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithItemprop
{
    /**
     * Add properties to an item.
     */
    public function withItemprop(string $value): static
    {
        $this->with(Attr::Itemprop, $value);

        return $this;
    }
    
    public function withoutItemprop(): static
    {
        $this->without(Attr::Itemprop);
        
        return $this;
    }
} 
