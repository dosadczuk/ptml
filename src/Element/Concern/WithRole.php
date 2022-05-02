<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRole
{
    /**
     * Defines an explicit role for an element for use by assistive
     * technologies.
     */
    public function withRole(string $value, bool $append = true): static
    {
        $this->with(Attr::Role, $value, $append);

        return $this;
    }
    
    public function withoutRole(): static
    {
        $this->without(Attr::Role);
        
        return $this;
    }
} 
