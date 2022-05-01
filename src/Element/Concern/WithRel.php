<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithRel
{
    /**
     * Specifies the relationship of the target object to the link object.
     */
    public function rel(string $value, bool $append = false): static
    {
        $this->with(Attr::Rel, $value, $append);

        return $this;
    }
} 
