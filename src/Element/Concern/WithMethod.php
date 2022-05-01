<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithMethod
{
    /**
     * Defines which HTTP method to use when submitting the form. Can be GET
     * (default) or POST.
     */
    public function method(string $value, bool $append = false): static
    {
        $this->with(Attr::Method, $value, $append);

        return $this;
    }
} 
