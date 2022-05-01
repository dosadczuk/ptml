<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRowspan
{
    /**
     * Defines the number of rows a table cell should span over.
     */
    public function rowspan(string $value, bool $append = false): static
    {
        $this->with(Attr::Rowspan, $value, $append);

        return $this;
    }
} 
