<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML element.
 */
interface ElementInterface extends \Stringable
{
    /**
     * Returns unique identifier.
     */
    public function uid(): string;

    /**
     * Checks if element has given uid.
     */
    public function is(string $uid): bool;

    /**
     * Returns tag name.
     */
    public function tag(): string;

    /**
     * Checks if element is given tag.
     */
    public function typeOf(Tag|string $tag): bool;

    /**
     * Returns attribute value or NULL if attribute not found.
     */
    public function attr(AttributeInterface|string $name): ?string;

    /**
     * Returns map of attributes.
     *
     * @return array<string, string>
     */
    public function attrs(): array;

    /**
     * Adds attribute with given value.
     */
    public function with(AttributeInterface|string $attr, string $value, bool $append = true): ElementInterface;

    /**
     * Removes attribute.
     */
    public function without(AttributeInterface|string $attr): ElementInterface;

    /**
     * Check if attribute exists.
     */
    public function has(AttributeInterface|string $attr): bool;

    /**
     * Checks if element is given element.
     */
    public function equalsTo(ElementInterface $value): bool;

    /**
     * Checks if element is not given element.
     */
    public function differsFrom(ElementInterface $value): bool;

    /**
     * Returns element as raw HTML.
     */
    public function html(): string;
}
