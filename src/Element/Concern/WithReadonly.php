<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithReadonly
{
    /**
     * Indicates whether the element can be edited.
     */
    public function withReadonly(string $value, bool $append = false): static
    {
        $this->with(Attr::Readonly, $value, $append);

        return $this;
    }
} 
