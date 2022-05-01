<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrcset
{
    /**
     * One or more responsive image candidates.
     */
    public function srcset(string $value, bool $append = false): static
    {
        $this->with(Attr::Srcset, $value, $append);

        return $this;
    }
} 
