<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithWrap
{
    /**
     * Indicates whether the text should be wrapped.
     */
    public function wrap(string $value, bool $append = false): static
    {
        $this->with(Attr::Wrap, $value, $append);

        return $this;
    }
} 
