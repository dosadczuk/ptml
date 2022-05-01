<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithStart
{
    /**
     * Defines the first number if other than 1.
     */
    public function start(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Start, $value);
        
        return $this;
    }
} 
