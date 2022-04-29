<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithWrap
{
    /**
     * Specifies how the text in a text area is to be wrapped when submitted in a form.
     */
    public function wrap(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Wrap, $value);
        
        return $this;
    }
}
