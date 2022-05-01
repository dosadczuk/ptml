<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithRowspan
{
    /**
     * Defines the number of rows a table cell should span over.
     */
    public function rowspan(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Rowspan, $value);
        
        return $this;
    }
} 
