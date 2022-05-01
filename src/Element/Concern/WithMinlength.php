<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMinlength
{
    /**
     * Defines the minimum number of characters allowed in the element.
     */
    public function minlength(string $value, bool $append = false): static
    {
        $this->with(Attr::Minlength, $value, $append);

        return $this;
    }
} 
