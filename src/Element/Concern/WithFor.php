<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithFor
{
    /**
     * Describes elements which belongs to this one.
     */
    public function for(string $value, bool $append = false): static
    {
        $this->with(Attr::For, $value, $append);

        return $this;
    }
} 
