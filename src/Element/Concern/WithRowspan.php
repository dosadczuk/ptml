<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRowspan
{
    /**
     * Defines the number of rows a table cell should span over.
     */
    public function withRowspan(string|int $value): static
    {
        $this->with(Attr::Rowspan, $value);

        return $this;
    }
    
    public function withoutRowspan(): static
    {
        $this->without(Attr::Rowspan);
        
        return $this;
    }
} 
