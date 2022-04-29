<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithContent
{
    /**
     * Gives the value associated with the http-equiv or name attribute.
     */
    public function content(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Content, $value);
        
        return $this;
    }
}
