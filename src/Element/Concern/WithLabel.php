<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithLabel
{
    /**
     * Specifies a user-readable title of the element.
     */
    public function label(string $value, bool $append = false): static
    {
        $this->with(Attr::Label, $value, $append);

        return $this;
    }
} 
