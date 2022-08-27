<?php
declare(strict_types=1);

namespace PTML;

/**
 * @extends \ArrayIterator<string, ElementInterface>
 * @internal
 */
final class Children extends \ArrayIterator
{
    /**
     * @param array<string, ElementInterface> $values
     */
    public function __construct(array $values = [])
    {
        parent::__construct($values);
    }

    /**
     * Checks if children exist.
     */
    public function empty(): bool
    {
        return $this->count() === 0;
    }

    /**
     * Returns array of children.
     *
     * @return ElementInterface[]
     */
    public function values(): array
    {
        return array_values($this->getArrayCopy());
    }

    /**
     * Adds given children or replaces if child is added already.
     *
     * @param ElementInterface[] $children
     */
    public function add(array $children): void
    {
        foreach ($children as $child) {
            $this[$child->uid()] = $child;
        }
    }

    /**
     * Removes given children.
     *
     * @param ElementInterface[] $children
     */
    public function rem(array $children): void
    {
        foreach ($children as $child) {
            unset($this[$child->uid()]);
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
     * Converts children to HTML.
     */
    public function html(): string
    {
        $children = [];

        /** @var ElementInterface $child */
        foreach ($this as $child) {
            $children[] = $child->html();
        }

        return implode('', $children);
    }

    public function __toString(): string
    {
        return $this->html();
    }
}
