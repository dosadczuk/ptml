<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMaxlength
{
    /**
     * Defines the maximum number of characters allowed in the element.
     */
    public function maxlength(string $value, bool $append = false): static
    {
        $this->with(Attr::Maxlength, $value, $append);

        return $this;
    }
} 
