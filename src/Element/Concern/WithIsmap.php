<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithIsmap
{
    /**
     * Indicates that the image is part of a server-side image map.
     */
    public function withIsmap(string|bool $value): static
    {
        $this->with(Attr::Ismap, $value);

        return $this;
    }
    
    public function withoutIsmap(): static
    {
        $this->without(Attr::Ismap);
        
        return $this;
    }
} 
