<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAllow
{
    /**
     * Specifies a feature-policy for the iframe.
     */
    public function withAllow(string $value, bool $append = true): static
    {
        $this->with(Attr::Allow, $value, $append);

        return $this;
    }
    
    public function withoutAllow(): static
    {
        $this->without(Attr::Allow);
        
        return $this;
    }
} 
