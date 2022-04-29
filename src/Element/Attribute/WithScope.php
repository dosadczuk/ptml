<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithScope
{
    /**
     * Specifies whether a header cell is a header for a column, row, or group of columns or rows.
     */
    public function scope(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Scope, $value);
        
        return $this;
    }
}
