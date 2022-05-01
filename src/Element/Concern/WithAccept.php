<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithAccept
{
    /**
     * List of types the server accepts, typically a file type.
     */
    public function accept(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Accept, $value);
        
        return $this;
    }
} 
