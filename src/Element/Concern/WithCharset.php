<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithCharset
{
    /**
     * Declares the character encoding of the page or script.
     */
    public function charset(string $value, bool $append = false): static
    {
        $this->with(Attr::Charset, $value, $append);

        return $this;
    }
} 
