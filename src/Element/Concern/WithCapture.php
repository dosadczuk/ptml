<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithCapture
{
    /**
     * From the Media Capture specification, specifies a new file can be
     * captured.
     */
    public function capture(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Capture, $value);
        
        return $this;
    }
} 
