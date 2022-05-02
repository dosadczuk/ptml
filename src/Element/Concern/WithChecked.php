<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithChecked
{
    /**
     * Indicates whether the element should be checked on page load.
     */
    public function withChecked(string $value, bool $append = true): static
    {
        $this->with(Attr::Checked, $value, $append);

        return $this;
    }
    
    public function withoutChecked(): static
    {
        $this->without(Attr::Checked);
        
        return $this;
    }
} 
