<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithRows
{
    /**
     * Specifies the visible number of lines in a text area.
     */
    public function rows(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Rows, $value);
        
        return $this;
    }
}
