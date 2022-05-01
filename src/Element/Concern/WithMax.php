<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMax
{
    /**
     * Indicates the maximum value allowed.
     */
    public function withMax(string $value, bool $append = false): static
    {
        $this->with(Attr::Max, $value, $append);

        return $this;
    }
} 
