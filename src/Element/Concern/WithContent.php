<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithContent
{
    /**
     * A value associated with http-equiv or name depending on the context.
     */
    public function content(string $value, bool $append = false): static
    {
        $this->with(Attr::Content, $value, $append);

        return $this;
    }
} 
