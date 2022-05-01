<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithOptimum
{
    /**
     * Indicates the optimal numeric value.
     */
    public function optimum(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Optimum, $value);
        
        return $this;
    }
} 
