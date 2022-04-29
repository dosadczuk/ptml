<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDirname
{
    /**
     * Specifies that the text direction will be submitted.
     */
    public function dirname(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Dirname, $value);
        
        return $this;
    }
}
