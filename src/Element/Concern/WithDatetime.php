<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDatetime
{
    /**
     * Indicates the date and time associated with the element.
     */
    public function withDatetime(string|\DateTimeInterface $value): static
    {
        $this->with(Attr::Datetime, $value);

        return $this;
    }
    
    public function withoutDatetime(): static
    {
        $this->without(Attr::Datetime);
        
        return $this;
    }
} 
