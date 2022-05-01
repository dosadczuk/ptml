<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDefault
{
    /**
     * Indicates that the track should be enabled unless the user's preferences
     * indicate something different.
     */
    public function withDefault(string $value, bool $append = false): static
    {
        $this->with(Attr::Default, $value, $append);

        return $this;
    }
} 
