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
    public function withCapture(string $value): static
    {
        $this->with(Attr::Capture, $value);

        return $this;
    }
    
    public function withoutCapture(): static
    {
        $this->without(Attr::Capture);
        
        return $this;
    }
} 
