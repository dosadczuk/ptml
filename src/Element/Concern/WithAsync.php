<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAsync
{
    /**
     * Executes the script asynchronously.
     */
    public function withAsync(string|bool $value): static
    {
        $this->with(Attr::Async, $value);

        return $this;
    }
    
    public function withoutAsync(): static
    {
        $this->without(Attr::Async);
        
        return $this;
    }
} 
