<?php
declare(strict_types=1);

namespace PTML;

/**
 * Abstraction of HTML element with children.
 *
 * @extends \RecursiveIterator<string, ElementInterface>
 */
interface ElementWithChildrenInterface extends ElementInterface, \RecursiveIterator, \Countable
{
    /**
     * Returns inner text.
     */
    public function text(): string;

    /**
     * Returns children.
     *
     * @return ElementInterface[]
     */
    public function children(): array;

    /**
     * Appends children to element.
     */
    public function append(ElementInterface ...$children): ElementWithChildrenInterface;

    /**
     * Removes children from element.
     */
    public function remove(ElementInterface ...$children): ElementWithChildrenInterface;

    /**
     * Checks if child exists.
     */
    public function contains(ElementInterface $child): bool;
}
