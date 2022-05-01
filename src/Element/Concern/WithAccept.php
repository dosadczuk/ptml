<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAccept
{
    /**
     * List of types the server accepts, typically a file type.
     */
    public function accept(string $value, bool $append = false): static
    {
        $this->with(Attr::Accept, $value, $append);

        return $this;
    }
} 
