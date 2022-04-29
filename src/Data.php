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
        private AttrType $type = AttrType::String
    ) {
    }

    /**
     * Create HTML `data-*` attribute with value of type `string`.
     */
    public static function string(string $name): self
    {
        return new self($name, AttrType::String);
    }

    /**
     * Create HTML `data-*` attribute with value of type `int`.
     */
    public static function int(string $name): self
    {
        return new self($name, AttrType::Int);
    }

    /**
     * Create HTML `data-*` attribute with value of type `float`.
     */
    public static function float(string $name): self
    {
        return new self($name, AttrType::Float);
    }

    /**
     * Create HTML `data-*` attribute with value of type `array`.
     */
    public static function array(string $name): self
    {
        return new self($name, AttrType::Array);
    }

    public function getType(): AttrType
    {
        return $this->type;
    }

    public function getName(): string
    {
        return strtolower("data-{$this->name}");
    }
}
