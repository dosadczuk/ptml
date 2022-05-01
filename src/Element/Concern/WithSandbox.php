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
    public function sandbox(string $value, bool $append = false): static
    {
        $this->with(Attr::Sandbox, $value, $append);

        return $this;
    }
} 
