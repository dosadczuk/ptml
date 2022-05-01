<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMultiple
{
    /**
     * Indicates whether multiple values can be entered in an input of the type
     * email or file.
     */
    public function multiple(string $value, bool $append = false): static
    {
        $this->with(Attr::Multiple, $value, $append);

        return $this;
    }
} 
