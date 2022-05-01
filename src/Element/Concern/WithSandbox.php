<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithSandbox
{
    /**
     * Stops a document loaded in an iframe from using certain features (such
     * as submitting forms or opening new windows).
     */
    public function sandbox(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Sandbox, $value);
        
        return $this;
    }
} 
