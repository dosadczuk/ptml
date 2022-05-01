<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDatetime
{
    /**
     * Indicates the date and time associated with the element.
     */
    public function datetime(string $value, bool $append = false): static
    {
        $this->with(Attr::Datetime, $value, $append);

        return $this;
    }
} 
