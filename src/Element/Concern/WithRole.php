<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRole
{
    /**
     * Defines an explicit role for an element for use by assistive
     * technologies.
     */
    public function role(string $value, bool $append = false): static
    {
        $this->with(Attr::Role, $value, $append);

        return $this;
    }
} 
