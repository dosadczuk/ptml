<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithUsemap
{
    /**
     * Specifies an image as a client-side image map.
     */
    public function usemap(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Usemap, $value);
        
        return $this;
    }
}
