<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHttpEquiv
{
    /**
     * Defines a pragma directive.
     */
    public function withHttpEquiv(string $value, bool $append = false): static
    {
        $this->with(Attr::HttpEquiv, $value, $append);

        return $this;
    }
} 
