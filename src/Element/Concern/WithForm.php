<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithForm
{
    /**
     * Indicates the form that is the owner of the element.
     */
    public function form(string $value, bool $append = false): static
    {
        $this->with(Attr::Form, $value, $append);

        return $this;
    }
} 
