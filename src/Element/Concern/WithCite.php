<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCite
{
    /**
     * Contains a URI which points to the source of the quote or change.
     */
    public function withCite(string $value, bool $append = false): static
    {
        $this->with(Attr::Cite, $value, $append);

        return $this;
    }
} 
