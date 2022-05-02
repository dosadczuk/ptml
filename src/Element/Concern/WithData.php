<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithData
{
    /**
     * Specifies the URL of the resource.
     */
    public function withData(string $value, bool $append = true): static
    {
        $this->with(Attr::Data, $value, $append);

        return $this;
    }
    
    public function withoutData(): static
    {
        $this->without(Attr::Data);
        
        return $this;
    }
} 
