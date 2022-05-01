<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutofocus
{
    /**
     * The element should be automatically focused after the page loaded.
     */
    public function autofocus(string $value, bool $append = false): static
    {
        $this->with(Attr::Autofocus, $value, $append);

        return $this;
    }
} 
