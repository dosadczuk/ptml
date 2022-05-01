<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithName
{
    /**
     * Name of the element. For example used by the server to identify the
     * fields in form submits.
     */
    public function name(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Name, $value);
        
        return $this;
    }
} 
