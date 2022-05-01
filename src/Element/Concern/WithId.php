<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithId
{
    /**
     * Often used with CSS to style a specific element. The value of this
     * attribute must be unique.
     */
    public function withId(string $value, bool $append = false): static
    {
        $this->with(Attr::Id, $value, $append);

        return $this;
    }
} 
