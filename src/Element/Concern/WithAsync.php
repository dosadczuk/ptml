<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAsync
{
    /**
     * Executes the script asynchronously.
     */
    public function withAsync(string $value, bool $append = true): static
    {
        $this->with(Attr::Async, $value, $append);

        return $this;
    }
    
    public function withoutAsync(): static
    {
        $this->without(Attr::Async);
        
        return $this;
    }
} 
