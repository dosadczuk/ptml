<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithFormaction
{
    /**
     * Indicates the action of the element, overriding the action defined in
     * the <form>.
     */
    public function formaction(string $value, bool $append = false): static
    {
        $this->with(Attr::Formaction, $value, $append);

        return $this;
    }
} 
