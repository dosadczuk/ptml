<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithIntegrity
{
    /**
     * Specifies a Subresource Integrity value that allows browsers to verify
     * what they fetch.
     */
    public function withIntegrity(string $value): static
    {
        $this->with(Attr::Integrity, $value);

        return $this;
    }
    
    public function withoutIntegrity(): static
    {
        $this->without(Attr::Integrity);
        
        return $this;
    }
} 
