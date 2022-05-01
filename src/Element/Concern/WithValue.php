<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithValue
{
    /**
     * Defines a default value which will be displayed in the element on page
     * load.
     */
    public function value(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Value, $value);
        
        return $this;
    }
} 
