<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithData
{
    /**
     * Specifies the URL of the resource.
     */
    public function withData(string $value): static
    {
        $this->with(Attr::Data, $value);

        return $this;
    }
    
    public function withoutData(): static
    {
        $this->without(Attr::Data);
        
        return $this;
    }
} 
