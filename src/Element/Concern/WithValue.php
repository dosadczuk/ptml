<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithValue
{
    /**
     * Defines a default value which will be displayed in the element on page
     * load.
     */
    public function value(string $value, bool $append = false): static
    {
        $this->with(Attr::Value, $value, $append);

        return $this;
    }
} 
