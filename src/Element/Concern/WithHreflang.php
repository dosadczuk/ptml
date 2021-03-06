<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHreflang
{
    /**
     * Specifies the language of the linked resource.
     */
    public function withHreflang(string $value): static
    {
        $this->with(Attr::Hreflang, $value);

        return $this;
    }
    
    public function withoutHreflang(): static
    {
        $this->without(Attr::Hreflang);
        
        return $this;
    }
} 
