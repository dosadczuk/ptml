<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithCols
{
    /**
     * Specifies the visible width of a text area.
     */
    public function cols(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Cols, $value);
        
        return $this;
    }
}
