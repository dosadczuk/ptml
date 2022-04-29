<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithColspan
{
    /**
     * Specifies the number of columns a table cell should span.
     */
    public function colspan(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Colspan, $value);
        
        return $this;
    }
}
