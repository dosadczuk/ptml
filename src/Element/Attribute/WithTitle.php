<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithTitle
{
    /**
     * Specifies extra information about an element.
     */
    public function title(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Title, $value);
        
        return $this;
    }
}
