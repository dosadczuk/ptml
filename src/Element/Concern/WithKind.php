<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithKind
{
    /**
     * Specifies the kind of text track.
     */
    public function kind(string $value, bool $append = false): static
    {
        $this->with(Attr::Kind, $value, $append);

        return $this;
    }
} 
