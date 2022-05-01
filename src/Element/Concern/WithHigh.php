<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHigh
{
    /**
     * Indicates the lower bound of the upper range.
     */
    public function withHigh(string $value, bool $append = false): static
    {
        $this->with(Attr::High, $value, $append);

        return $this;
    }
} 
