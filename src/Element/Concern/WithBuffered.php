<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithBuffered
{
    /**
     * Contains the time range of already buffered media.
     */
    public function buffered(string $value, bool $append = false): static
    {
        $this->with(Attr::Buffered, $value, $append);

        return $this;
    }
} 
