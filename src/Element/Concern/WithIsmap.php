<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithIsmap
{
    /**
     * Indicates that the image is part of a server-side image map.
     */
    public function withIsmap(string $value, bool $append = false): static
    {
        $this->with(Attr::Ismap, $value, $append);

        return $this;
    }
    
    public function withoutIsmap(): static
    {
        $this->without(Attr::Ismap);
        
        return $this;
    }
} 
