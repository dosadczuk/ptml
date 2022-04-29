<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithDefault
{
    /**
     * Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate.
     */
    public function default(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Default, $value);
        
        return $this;
    }
}
