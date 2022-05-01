<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMin
{
    /**
     * Indicates the minimum value allowed.
     */
    public function withMin(string $value, bool $append = false): static
    {
        $this->with(Attr::Min, $value, $append);

        return $this;
    }
} 
