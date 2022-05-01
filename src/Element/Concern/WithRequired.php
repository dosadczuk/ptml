<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRequired
{
    /**
     * Indicates whether this element is required to fill out or not.
     */
    public function required(string $value, bool $append = false): static
    {
        $this->with(Attr::Required, $value, $append);

        return $this;
    }
} 
