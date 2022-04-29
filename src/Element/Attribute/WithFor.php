<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithFor
{
    /**
     * Specifies which form element(s) a label/calculation is bound to.
     */
    public function for(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::For, $value);
        
        return $this;
    }
}
