<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithList
{
    /**
     * Refers to a <datalist> element that contains pre-defined options for an <input> element.
     */
    public function list(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::List, $value);
        
        return $this;
    }
}
