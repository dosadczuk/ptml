<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDirname
{
    /**
     * Specifies that the text direction will be submitted.
     */
    public function withDirname(string $value, bool $append = true): static
    {
        $this->with(Attr::Dirname, $value, $append);

        return $this;
    }
    
    public function withoutDirname(): static
    {
        $this->without(Attr::Dirname);
        
        return $this;
    }
} 
