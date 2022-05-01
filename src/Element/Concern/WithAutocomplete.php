<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutocomplete
{
    /**
     * Indicates whether controls in this form can by default have their values
     * automatically completed by the browser.
     */
    public function autocomplete(string $value, bool $append = false): static
    {
        $this->with(Attr::Autocomplete, $value, $append);

        return $this;
    }
} 
