<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithRowspan
{
    /**
     * Specifies the number of rows a table cell should span.
     */
    public function rowspan(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Rowspan, $value);
        
        return $this;
    }
}
