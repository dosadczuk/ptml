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
    public function withCapture(string $value, bool $append = true): static
    {
        $this->with(Attr::Capture, $value, $append);

        return $this;
    }
    
    public function withoutCapture(): static
    {
        $this->without(Attr::Capture);
        
        return $this;
    }
} 
