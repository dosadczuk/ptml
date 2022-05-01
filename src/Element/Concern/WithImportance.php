<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithImportance
{
    /**
     * Indicates the relative fetch priority for the resource.
     */
    public function withImportance(string $value, bool $append = false): static
    {
        $this->with(Attr::Importance, $value, $append);

        return $this;
    }
    
    public function withoutImportance(): static
    {
        $this->without(Attr::Importance);
        
        return $this;
    }
} 
