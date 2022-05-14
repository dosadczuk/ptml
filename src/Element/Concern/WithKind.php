<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithKind
{
    /**
     * Specifies the kind of text track.
     */
    public function withKind(string $value): static
    {
        $this->with(Attr::Kind, $value);

        return $this;
    }
    
    public function withoutKind(): static
    {
        $this->without(Attr::Kind);
        
        return $this;
    }
} 
