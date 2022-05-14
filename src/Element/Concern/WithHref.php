<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHref
{
    /**
     * The URL of a linked resource.
     */
    public function withHref(string $value): static
    {
        $this->with(Attr::Href, $value);

        return $this;
    }
    
    public function withoutHref(): static
    {
        $this->without(Attr::Href);
        
        return $this;
    }
} 
