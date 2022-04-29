<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDatetime
{
    /**
     * Specifies the date and time.
     */
    public function datetime(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Datetime, $value);
        
        return $this;
    }
}
