<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithData
{
    /**
     * Specifies the URL of the resource.
     */
    public function data(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Data, $value);
        
        return $this;
    }
} 
