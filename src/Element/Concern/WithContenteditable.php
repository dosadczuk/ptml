<?php
declare(strict_types=1);

namespace PTML\Element\Concern;

use PTML\Attr;

trait WithContenteditable
{
    /**
     * Indicates whether the element's content is editable.
     */
    public function contenteditable(string $value, bool $append = false): static
    {
        $this->with(Attr::Contenteditable, $value, $append);

        return $this;
    }
} 
