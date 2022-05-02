<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithItemprop
{
    /**
     * Add properties to an item.
     */
    public function withItemprop(string $value, bool $append = true): static
    {
        $this->with(Attr::Itemprop, $value, $append);

        return $this;
    }
    
    public function withoutItemprop(): static
    {
        $this->without(Attr::Itemprop);
        
        return $this;
    }
} 
