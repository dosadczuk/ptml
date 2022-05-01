<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAction
{
    /**
     * The URI of a program that processes the information submitted via the
     * form.
     */
    public function action(string $value, bool $append = false): static
    {
        $this->with(Attr::Action, $value, $append);

        return $this;
    }
} 
