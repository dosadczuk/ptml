<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDisabled
{
    /**
     * Indicates whether the user can interact with the element.
     */
    public function disabled(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Disabled, $value);
        
        return $this;
    }
} 
