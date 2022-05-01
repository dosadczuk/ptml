<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithAcceptCharset
{
    /**
     * List of supported charsets.
     */
    public function acceptCharset(string $value, bool $append = false): static
    {
        $this->with(Attr::AcceptCharset, $value, $append);

        return $this;
    }
} 
