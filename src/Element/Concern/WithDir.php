<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithDir
{
    /**
     * Defines the text direction. Allowed values are ltr (Left-To-Right) or
     * rtl (Right-To-Left)
     */
    public function withDir(string $value): static
    {
        $this->with(Attr::Dir, $value);

        return $this;
    }
    
    public function withoutDir(): static
    {
        $this->without(Attr::Dir);
        
        return $this;
    }
} 
