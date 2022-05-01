<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrcset
{
    /**
     * One or more responsive image candidates.
     */
    public function withSrcset(string $value, bool $append = false): static
    {
        $this->with(Attr::Srcset, $value, $append);

        return $this;
    }
    
    public function withoutSrcset(): static
    {
        $this->without(Attr::Srcset);
        
        return $this;
    }
} 
