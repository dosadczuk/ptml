<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutoplay
{
    /**
     * The audio or video should play as soon as possible.
     */
    public function autoplay(string $value, bool $append = false): static
    {
        $this->with(Attr::Autoplay, $value, $append);

        return $this;
    }
} 
