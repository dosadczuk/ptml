<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithName
{
    /**
     * Name of the element. For example used by the server to identify the
     * fields in form submits.
     */
    public function withName(string $value, bool $append = false): static
    {
        $this->with(Attr::Name, $value, $append);

        return $this;
    }
} 
