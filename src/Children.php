<?php
declare(strict_types=1);

namespace PTML;

/**
 * @extends \ArrayObject<string, Element>
 */
final class Children extends \ArrayObject
{
    public function __construct()
    {
        parent::__construct([], 0, \ArrayIterator::class);
    }

    public function empty(): bool
    {
        return $this->count() === 0;
    }

    public function values(): array
    {
        return array_values($this->getArrayCopy());
    }

    public function add(ElementInterface ...$children): void
    {
        foreach ($children as $child) {
            $this[$child->uid()] = $child;
        }
    }

    public function has(ElementInterface $child): bool
    {
        return isset($this[$child->uid()]);
    }

    public function del(ElementInterface ...$children): void
    {
        foreach ($children as $child) {
            unset($this[$child->uid()]);
        }
    }

    public function __toString(): string
    {
        $children = [];
        foreach ($this as $element) {
            $children[] = $element->html();
        }

        return implode('', $children);
    }
}
