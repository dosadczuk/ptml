<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithStart
{
    /**
     * Specifies the start value of an ordered list.
     */
    public function start(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Start, $value);
        
        return $this;
    }
}
