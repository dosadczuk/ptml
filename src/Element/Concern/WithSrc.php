<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrc
{
    /**
     * The URL of the embeddable content.
     */
    public function withSrc(string $value): static
    {
        $this->with(Attr::Src, $value);

        return $this;
    }
    
    public function withoutSrc(): static
    {
        $this->without(Attr::Src);
        
        return $this;
    }
} 
