<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithTabindex
{
    /**
     * Overrides the browser's default tab order and follows the one specified
     * instead.
     */
    public function withTabindex(string $value, bool $append = false): static
    {
        $this->with(Attr::Tabindex, $value, $append);

        return $this;
    }
} 
