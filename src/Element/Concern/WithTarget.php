<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithTarget
{
    /**
     * Specifies where to open the linked document (in the case of an <a>
     * element) or where to display the response received (in the case of a
     * <form> element)
     */
    public function withTarget(string $value): static
    {
        $this->with(Attr::Target, $value);

        return $this;
    }
    
    public function withoutTarget(): static
    {
        $this->without(Attr::Target);
        
        return $this;
    }
} 
