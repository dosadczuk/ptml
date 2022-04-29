<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSrc
{
    /**
     * Specifies the URL of the media file.
     */
    public function src(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Src, $value);
        
        return $this;
    }
}
