<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithTarget
{
    /**
     * Specifies the target for where to open the linked document or where to submit the form.
     */
    public function target(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Target, $value);
        
        return $this;
    }
}
