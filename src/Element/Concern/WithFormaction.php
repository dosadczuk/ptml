<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithFormaction
{
    /**
     * Indicates the action of the element, overriding the action defined in
     * the <form>.
     */
    public function withFormaction(string $value): static
    {
        $this->with(Attr::Formaction, $value);

        return $this;
    }
    
    public function withoutFormaction(): static
    {
        $this->without(Attr::Formaction);
        
        return $this;
    }
} 
