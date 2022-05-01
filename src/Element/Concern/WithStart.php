<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithStart
{
    /**
     * Defines the first number if other than 1.
     */
    public function start(string $value, bool $append = false): static
    {
        $this->with(Attr::Start, $value, $append);

        return $this;
    }
} 
