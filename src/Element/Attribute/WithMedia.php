<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithMedia
{
    /**
     * Specifies what media/device the linked document is optimized for.
     */
    public function media(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Media, $value);
        
        return $this;
    }
}
