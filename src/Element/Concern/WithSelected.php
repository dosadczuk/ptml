<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSelected
{
    /**
     * Defines a value which will be selected on page load.
     */
    public function withSelected(string|bool $value): static
    {
        $this->with(Attr::Selected, $value);

        return $this;
    }
    
    public function withoutSelected(): static
    {
        $this->without(Attr::Selected);
        
        return $this;
    }
} 
