<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAction
{
    /**
     * Specifies where to send the form-data when a form is submitted.
     */
    public function action(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Action, $value);
        
        return $this;
    }
}
