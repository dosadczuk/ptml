<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML `data-*` attribute.
 */
final class Data implements AttributeInterface
{
    public function __construct(
        private string $name
    ) {
    }

    /**
     * Alternative to constructor.
     */
    public static function new(string $name): self
    {
        return new self($name);
    }

    public function name(): string
    {
        return "data-$this->name";
    }
}
