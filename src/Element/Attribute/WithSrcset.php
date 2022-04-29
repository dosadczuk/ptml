<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSrcset
{
    /**
     * Specifies the URL of the image to use in different situations.
     */
    public function srcset(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Srcset, $value);
        
        return $this;
    }
}
