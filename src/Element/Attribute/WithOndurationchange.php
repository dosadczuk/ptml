<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOndurationchange
{
    /**
     * Script to be run when the length of the media changes.
     */
    public function ondurationchange(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ondurationchange, $value);
        
        return $this;
    }
}
