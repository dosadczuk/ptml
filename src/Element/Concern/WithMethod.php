<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMethod
{
    /**
     * Defines which HTTP method to use when submitting the form. Can be GET
     * (default) or POST.
     */
    public function method(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Method, $value);
        
        return $this;
    }
} 
