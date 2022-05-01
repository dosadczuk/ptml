<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAction
{
    /**
     * The URI of a program that processes the information submitted via the
     * form.
     */
    public function action(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Action, $value);
        
        return $this;
    }
} 
