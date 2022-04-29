<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithReversed
{
    /**
     * Specifies that the list order should be descending (9,8,7...).
     */
    public function reversed(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Reversed, $value);
        
        return $this;
    }
}
