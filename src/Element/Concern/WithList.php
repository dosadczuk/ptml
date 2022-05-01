<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithList
{
    /**
     * Identifies a list of pre-defined options to suggest to the user.
     */
    public function list(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::List, $value);
        
        return $this;
    }
} 
