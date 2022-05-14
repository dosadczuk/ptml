<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithName
{
    /**
     * Name of the element. For example used by the server to identify the
     * fields in form submits.
     */
    public function withName(string $value): static
    {
        $this->with(Attr::Name, $value);

        return $this;
    }
    
    public function withoutName(): static
    {
        $this->without(Attr::Name);
        
        return $this;
    }
} 
