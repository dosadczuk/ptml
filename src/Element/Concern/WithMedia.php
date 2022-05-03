<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMedia
{
    /**
     * Specifies a hint of the media for which the linked resource was designed.
     */
    public function withMedia(string $value, bool $append = true): static
    {
        $this->with(Attr::Media, $value, $append);

        return $this;
    }
    
    public function withoutMedia(): static
    {
        $this->without(Attr::Media);
        
        return $this;
    }
} 
