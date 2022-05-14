<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSrclang
{
    /**
     * Specifies the language of the track text data (required if
     * kind="subtitles").
     */
    public function withSrclang(string $value): static
    {
        $this->with(Attr::Srclang, $value);

        return $this;
    }
    
    public function withoutSrclang(): static
    {
        $this->without(Attr::Srclang);
        
        return $this;
    }
} 
