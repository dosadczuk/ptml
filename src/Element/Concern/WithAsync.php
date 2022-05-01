<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAsync
{
    /**
     * Executes the script asynchronously.
     */
    public function async(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Async, $value);
        
        return $this;
    }
} 
