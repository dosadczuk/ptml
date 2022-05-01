<?php
declare(strict_types=1);

namespace PTML;

/**
 * @extends \ArrayIterator<string, Element>
 */
final class Children extends \ArrayIterator
{
    public function __construct()
    {
        parent::__construct([]);
    }

    /**
     * Check if children exist.
     */
    public function empty(): bool
    {
        return $this->count() === 0;
    }

    /**
     * Returns array of children.
     */
    public function values(): array
    {
        return array_values($this->getArrayCopy());
    }

    /**
     * Adds given children or replaces if child is added already.
     */
    public function add(ElementInterface ...$children): void
    {
        foreach ($children as $child) {
            $this[$child->uid()] = $child;
        }
    }

    /**
     * Checks if child exists.
     */
    public function has(ElementInterface $child): bool
    {
        return isset($this[$child->uid()]);
    }

    /**
     * Removes given children.
     */
    public function del(ElementInterface ...$children): void
    {
        foreach ($children as $child) {
            unset($this[$child->uid()]);
        }
    }

    /**
     * Converts children to HTML.
     */
    public function html(): string
    {
        $children = [];
        foreach ($this as $element) {
            $children[] = $element->html();
        }

        return implode('', $children);
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
