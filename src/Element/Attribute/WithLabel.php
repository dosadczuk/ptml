<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithLabel
{
    /**
     * Specifies the title of the text track.
     */
    public function label(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Label, $value);
        
        return $this;
    }
}
