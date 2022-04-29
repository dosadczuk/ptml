<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSize
{
    /**
     * Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>).
     */
    public function size(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Size, $value);
        
        return $this;
    }
}
