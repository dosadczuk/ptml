<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSelected
{
    /**
     * Defines a value which will be selected on page load.
     */
    public function withSelected(string $value, bool $append = false): static
    {
        $this->with(Attr::Selected, $value, $append);

        return $this;
    }
    
    public function withoutSelected(): static
    {
        $this->without(Attr::Selected);
        
        return $this;
    }
} 
