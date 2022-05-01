<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrc
{
    /**
     * The URL of the embeddable content.
     */
    public function src(string $value, bool $append = false): static
    {
        $this->with(Attr::Src, $value, $append);

        return $this;
    }
} 
