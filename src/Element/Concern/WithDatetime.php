<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithDatetime
{
    /**
     * Indicates the date and time associated with the element.
     */
    public function datetime(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Datetime, $value);
        
        return $this;
    }
} 
