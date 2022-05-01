<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSizes
{
    /**
     * Specifies the size of the linked resource.
     */
    public function sizes(string $value, bool $append = false): static
    {
        $this->with(Attr::Sizes, $value, $append);

        return $this;
    }
} 
