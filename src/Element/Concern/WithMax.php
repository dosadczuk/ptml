<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithMax
{
    /**
     * Indicates the maximum value allowed.
     */
    public function max(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Max, $value);
        
        return $this;
    }
} 
