<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithChecked
{
    /**
     * Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio").
     */
    public function checked(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Checked, $value);
        
        return $this;
    }
}
