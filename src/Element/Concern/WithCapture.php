<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCapture
{
    /**
     * From the Media Capture specification, specifies a new file can be
     * captured.
     */
    public function capture(string $value, bool $append = false): static
    {
        $this->with(Attr::Capture, $value, $append);

        return $this;
    }
} 
