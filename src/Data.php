<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML `data-*` attribute.
 */
final class Data implements AttrInterface
{
    public function __construct(
        private string $name,
    ) {
    }

    public function getName(): string
    {
        return strtolower("data-{$this->name}");
    }
}
