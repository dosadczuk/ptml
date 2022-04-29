<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithOptimum
{
    /**
     * Specifies what value is the optimal value for the gauge.
     */
    public function optimum(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Optimum, $value);
        
        return $this;
    }
}
