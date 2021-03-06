<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMethod
{
    /**
     * Defines which HTTP method to use when submitting the form. Can be GET
     * (default) or POST.
     */
    public function withMethod(string $value): static
    {
        $this->with(Attr::Method, $value);

        return $this;
    }
    
    public function withoutMethod(): static
    {
        $this->without(Attr::Method);
        
        return $this;
    }
} 
