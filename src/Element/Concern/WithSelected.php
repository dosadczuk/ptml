<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSelected
{
    /**
     * Defines a value which will be selected on page load.
     */
    public function selected(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Selected, $value);
        
        return $this;
    }
} 
