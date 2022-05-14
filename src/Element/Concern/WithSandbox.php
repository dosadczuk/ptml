<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithSandbox
{
    /**
     * Stops a document loaded in an iframe from using certain features (such
     * as submitting forms or opening new windows).
     */
    public function withSandbox(string $value): static
    {
        $this->with(Attr::Sandbox, $value);

        return $this;
    }
    
    public function withoutSandbox(): static
    {
        $this->without(Attr::Sandbox);
        
        return $this;
    }
} 
