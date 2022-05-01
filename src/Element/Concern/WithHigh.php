<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithHigh
{
    /**
     * Indicates the lower bound of the upper range.
     */
    public function high(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::High, $value);
        
        return $this;
    }
} 
