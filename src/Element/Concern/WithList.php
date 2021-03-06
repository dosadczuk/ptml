<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithList
{
    /**
     * Identifies a list of pre-defined options to suggest to the user.
     */
    public function withList(string $value): static
    {
        $this->with(Attr::List, $value);

        return $this;
    }
    
    public function withoutList(): static
    {
        $this->without(Attr::List);
        
        return $this;
    }
} 
