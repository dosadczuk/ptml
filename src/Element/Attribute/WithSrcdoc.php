<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithSrcdoc
{
    /**
     * Specifies the HTML content of the page to show in the <iframe>.
     */
    public function srcdoc(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Srcdoc, $value);
        
        return $this;
    }
}
