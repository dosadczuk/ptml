<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithControls
{
    /**
     * Indicates whether the browser should show playback controls to the user.
     */
    public function controls(string $value, bool $append = false): static
    {
        $this->with(Attr::Controls, $value, $append);

        return $this;
    }
} 
