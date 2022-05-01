<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithShape
{
    /**
     * Specifies the shape of the area.
     */
    public function shape(string $value, bool $append = false): static
    {
        $this->with(Attr::Shape, $value, $append);

        return $this;
    }
} 
