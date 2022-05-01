<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSizes
{
    /**
     * Specifies the size of the linked resource.
     */
    public function withSizes(string $value, bool $append = false): static
    {
        $this->with(Attr::Sizes, $value, $append);

        return $this;
    }
    
    public function withoutSizes(): static
    {
        $this->without(Attr::Sizes);
        
        return $this;
    }
} 
