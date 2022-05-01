<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCsp
{
    /**
     * Specifies the Content Security Policy that an embedded document must
     * agree to enforce upon itself.
     */
    public function csp(string $value, bool $append = false): static
    {
        $this->with(Attr::Csp, $value, $append);

        return $this;
    }
} 
