<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithControls
{
    /**
     * Indicates whether the browser should show playback controls to the user.
     */
    public function withControls(string|bool $value): static
    {
        $this->with(Attr::Controls, $value);

        return $this;
    }
    
    public function withoutControls(): static
    {
        $this->without(Attr::Controls);
        
        return $this;
    }
} 
