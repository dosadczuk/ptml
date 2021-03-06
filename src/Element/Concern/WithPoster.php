<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithPoster
{
    /**
     * A URL indicating a poster frame to show until the user plays or seeks.
     */
    public function withPoster(string $value): static
    {
        $this->with(Attr::Poster, $value);

        return $this;
    }
    
    public function withoutPoster(): static
    {
        $this->without(Attr::Poster);
        
        return $this;
    }
} 
