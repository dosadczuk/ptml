<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSandbox
{
    /**
     * Enables an extra set of restrictions for the content in an <iframe>.
     */
    public function sandbox(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Sandbox, $value);
        
        return $this;
    }
}
