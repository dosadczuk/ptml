<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\{Attr, Element};

trait WithBuffered
{
    /**
     * Contains the time range of already buffered media.
     */
    public function buffered(string $value): static
    {
        /** @var Element $this */
        $this->with(Attr::Buffered, $value);
        
        return $this;
    }
} 
