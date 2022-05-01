<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAllow
{
    /**
     * Specifies a feature-policy for the iframe.
     */
    public function withAllow(string $value, bool $append = false): static
    {
        $this->with(Attr::Allow, $value, $append);

        return $this;
    }
} 
