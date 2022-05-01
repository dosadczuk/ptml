<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithHeaders
{
    /**
     * IDs of the <th> elements which applies to this element.
     */
    public function headers(string $value, bool $append = false): static
    {
        $this->with(Attr::Headers, $value, $append);

        return $this;
    }
} 
