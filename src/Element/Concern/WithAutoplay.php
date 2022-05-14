<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAutoplay
{
    /**
     * The audio or video should play as soon as possible.
     */
    public function withAutoplay(string|bool $value): static
    {
        $this->with(Attr::Autoplay, $value);

        return $this;
    }
    
    public function withoutAutoplay(): static
    {
        $this->without(Attr::Autoplay);
        
        return $this;
    }
} 
