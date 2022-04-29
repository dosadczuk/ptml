<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithFormaction
{
    /**
     * Specifies where to send the form-data when a form is submitted. Only for type="submit".
     */
    public function formaction(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Formaction, $value);
        
        return $this;
    }
}
