<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithIsmap
{
    /**
     * Indicates that the image is part of a server-side image map.
     */
    public function ismap(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Ismap, $value);
        
        return $this;
    }
} 
