<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAsync
{
    /**
     * Executes the script asynchronously.
     */
    public function async(string $value, bool $append = false): static
    {
        $this->with(Attr::Async, $value, $append);

        return $this;
    }
} 
