<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML element.
 */
interface ElementInterface extends \RecursiveIterator, \Countable, \Stringable
{
    /**
     * Returns unique identifier.
     */
    public function uid(): string;

    /**
     * Returns tag name.
     */
    public function tag(): string;

    /**
     * Returns inner text.
     */
    public function text(): string;

    /**
     * Returns map of attributes.
     *
     * @return array<string, string>
     */
    public function attrs(): array;

    /**
     * Returns attribute value or NULL if attribute not found.
     */
    public function attr(AttrInterface|string $name): mixed;

    /**
     * Appends attribute with given value.
     */
    public function with(AttrInterface|string $name, string $value = ''): static;

    /**
     * Check if attribute exists.
     */
    public function exists(AttrInterface|string $name): bool;

    /**
     * Removes attribute.
     */
    public function without(AttrInterface|string $name): static;

    /**
     * Returns children.
     *
     * @return ElementInterface[]
     */
    public function children(): array;

    /**
     * Appends children to element.
     */
    public function append(ElementInterface ...$children): static;

    /**
     * Removes children from element.
     */
    public function remove(ElementInterface ...$children): static;

    /**
     * Checks if child exists.
     */
    public function contains(ElementInterface $child): bool;

    /**
     * Returns element as raw HTML.
     */
    public function html(): string;
}
