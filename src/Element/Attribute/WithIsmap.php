<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithIsmap
{
    /**
     * Specifies an image as a server-side image map.
     */
    public function ismap(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ismap, $value);
        
        return $this;
    }
}
