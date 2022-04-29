<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAutocomplete
{
    /**
     * Specifies whether the <form> or the <input> element should have autocomplete enabled.
     */
    public function autocomplete(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Autocomplete, $value);
        
        return $this;
    }
}
