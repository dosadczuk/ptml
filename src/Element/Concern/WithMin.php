<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMin
{
    /**
     * Indicates the minimum value allowed.
     */
    public function min(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Min, $value);
        
        return $this;
    }
} 
