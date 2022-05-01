<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAlt
{
    /**
     * Alternative text in case an image can't be displayed.
     */
    public function withAlt(string $value, bool $append = false): static
    {
        $this->with(Attr::Alt, $value, $append);

        return $this;
    }
    
    public function withoutAlt(): static
    {
        $this->without(Attr::Alt);
        
        return $this;
    }
} 
