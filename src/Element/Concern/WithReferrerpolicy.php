<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithReferrerpolicy
{
    /**
     * Specifies which referrer is sent when fetching the resource.
     */
    public function withReferrerpolicy(string $value): static
    {
        $this->with(Attr::Referrerpolicy, $value);

        return $this;
    }
    
    public function withoutReferrerpolicy(): static
    {
        $this->without(Attr::Referrerpolicy);
        
        return $this;
    }
} 
