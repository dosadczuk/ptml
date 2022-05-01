<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSize
{
    /**
     * Defines the width of the element (in pixels). If the element's type
     * attribute is text or password then it's the number of characters.
     */
    public function withSize(string $value, bool $append = false): static
    {
        $this->with(Attr::Size, $value, $append);

        return $this;
    }
} 
