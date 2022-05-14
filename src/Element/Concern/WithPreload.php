<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithPreload
{
    /**
     * Indicates whether the whole resource, parts of it or nothing should be
     * preloaded.
     */
    public function withPreload(string $value): static
    {
        $this->with(Attr::Preload, $value);

        return $this;
    }
    
    public function withoutPreload(): static
    {
        $this->without(Attr::Preload);
        
        return $this;
    }
} 
