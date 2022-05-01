<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithType
{
    /**
     * Defines the type of the element.
     */
    public function withType(string $value, bool $append = false): static
    {
        $this->with(Attr::Type, $value, $append);

        return $this;
    }
} 
