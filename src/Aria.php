<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML `aria-*` attribute.
 */
enum Aria: string implements AttrInterface
{
    public function getName(): string
    {
        return strtolower("aria-{$this->value}");
    }
}
