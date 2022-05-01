<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithWidth
{
    /**
     * For the elements listed here, this establishes the element's width.
     */
    public function width(string $value, bool $append = false): static
    {
        $this->with(Attr::Width, $value, $append);

        return $this;
    }
} 
