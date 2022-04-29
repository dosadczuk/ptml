<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithRel
{
    /**
     * Specifies the relationship between the current document and the linked document.
     */
    public function rel(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Rel, $value);
        
        return $this;
    }
}
