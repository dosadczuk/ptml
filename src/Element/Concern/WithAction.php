<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAction
{
    /**
     * The URI of a program that processes the information submitted via the
     * form.
     */
    public function withAction(string $value): static
    {
        $this->with(Attr::Action, $value);

        return $this;
    }
    
    public function withoutAction(): static
    {
        $this->without(Attr::Action);
        
        return $this;
    }
} 
