<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHeaders
{
    /**
     * Specifies one or more headers cells a cell is related to.
     */
    public function headers(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Headers, $value);
        
        return $this;
    }
}
