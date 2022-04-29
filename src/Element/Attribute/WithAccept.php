<?php
declare(strict_types=1);

namespace PTML\Element\Attribute;

use PTML\{Attr, Element};

trait WithAccept
{
    /**
     * Specifies the types of files that the server accepts (only for type="file").
     */
    public function accept(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Accept, $value);
        
        return $this;
    }
}
