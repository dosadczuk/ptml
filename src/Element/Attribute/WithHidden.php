<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithHidden
{
    /**
     * Specifies that an element is not yet, or is no longer, relevant.
     */
    public function hidden(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Hidden, $value);
        
        return $this;
    }
}
