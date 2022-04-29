<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDir
{
    /**
     * Specifies the text direction for the content in an element.
     */
    public function dir(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Dir, $value);
        
        return $this;
    }
}
