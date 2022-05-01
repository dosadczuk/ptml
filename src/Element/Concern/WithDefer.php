<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDefer
{
    /**
     * Indicates that the script should be executed after the page has been
     * parsed.
     */
    public function withDefer(string $value, bool $append = false): static
    {
        $this->with(Attr::Defer, $value, $append);

        return $this;
    }
} 
